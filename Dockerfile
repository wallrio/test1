FROM php:8.3-cli

RUN apt-get update \
  && apt-get install -y --no-install-recommends git nano \
  && rm -rf /var/lib/apt/lists/*

WORKDIR /app
COPY . .

EXPOSE 5173
CMD ["php", "-S", "0.0.0.0:5173", "-t", "public"]
