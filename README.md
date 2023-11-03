# Docker WordPress Starter Code

## Features

- **Webserver**: This starter code includes a Dockerized Nginx web server for hosting your WordPress site.
- **Database**: It also includes a MySQL database container for your WordPress database.
- **Docker Compose**: The configuration is set up to be managed with Docker Compose, making it easy to start and manage your containers.

## Getting Started

Follow these steps to set up your WordPress development environment:

1. **Prerequisites**:
   - Make sure you have Docker and Docker Compose installed on your system.

2. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd docker-wordpress-starter
   mkdir mysql/
   ```
3. **Configuration**:
    Adjust the Nginx configuration in the ./nginx/default.conf file to match your project requirements.

4. **Run Docker Compose**:
   ```bash
   sudo docker compose up -d --build
   ```
5. **Access Wordpress**:
    Once the containers are running, you can access your WordPress site in your web browser at http://localhost.
