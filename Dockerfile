#FROM ubuntu:21.04
FROM php:8.0-fpm
LABEL maintainer="Divya Shrestha"
ARG WWWGROUP

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

WORKDIR /var/www

ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    libzip-dev \
    libonig-dev \
    libwebp-dev \
#    libmcrypt-dev \
#    zlib1g-dev \
#    libxml2-dev \
#    graphviz \
    curl

#RUN apt-get update \
#    && apt-get install -y gnupg gosu curl ca-certificates zip unzip git supervisor sqlite3 libcap2-bin libpng-dev python2 \
#    && mkdir -p ~/.gnupg \
#    && chmod 600 ~/.gnupg \
#    && echo "disable-ipv6" >> ~/.gnupg/dirmngr.conf \
#    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E5267A6C \
#    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C300EE8C \
#    && echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu hirsute main" > /etc/apt/sources.list.d/ppa_ondrej_php.list \
#    && apt-get update \
#    && apt-get install -y php8.0-cli php8.0-dev \
#       php8.0-pgsql php8.0-sqlite3 php8.0-gd \
#       php8.0-curl php8.0-memcached \
#       php8.0-imap php8.0-mysql php8.0-mbstring \
#       php8.0-xml php8.0-zip php8.0-bcmath php8.0-soap \
#       php8.0-intl php8.0-readline php8.0-pcov \
#       php8.0-msgpack php8.0-igbinary php8.0-ldap \
#       php8.0-redis php8.0-swoole php8.0-xdebug \
#    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
#    && curl -sL https://deb.nodesource.com/setup_16.x | bash - \
#    && apt-get install -y nodejs \
#    && curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
#    && echo "deb https://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
#    && apt-get update \
#    && apt-get install -y yarn \
#    && apt-get install -y mysql-client \
#    && apt-get install -y postgresql-client \
#    && apt-get -y autoremove \
#    && apt-get clean \
#    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

#RUN setcap "cap_net_bind_service=+ep" /usr/bin/php8.0

# installing node js and yarn file
RUN apt-get update \
    && curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs \
    && curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    && echo "deb https://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
    && apt-get update \
    && apt-get install -y yarn

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
#RUN docker-php-ext-configure gd --with-gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ --with-png=/usr/include/
#RUN docker-php-ext-configure gd --with-png=/usr/include/ --with-jpeg=/usr/include/ --with-freetype=/usr/include/
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
