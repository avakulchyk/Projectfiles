# OpenCart E-Commerce Project

This repository contains a fully configured OpenCart project ready to be deployed instantly using Docker and Docker Compose. The database dump is automatically imported on the first startup.

## Prerequisites

Before running the project, make sure you have the following software installed on your machine:
* [Docker Desktop](https://docker.com) (includes Docker Compose)
* [Git](https://git-scm.com)

## Quick Start Guide

Follow these three simple steps to launch the website locally:

### 1. Clone the Repository

Open your terminal (Terminal on macOS/Linux or Git Bash on Windows).

First, navigate to the directory where you want to store the project. For example:

```bash
cd ~/Documents
```

Clone the repository from GitHub by running the following command:

```bash
git clone https://github.com/avakulchyk/Projectfiles.git
```

This command downloads the repository and creates a local folder named `Projectfiles`.

Navigate into the project directory:

```bash
cd Projectfiles
```

Verify that the repository was cloned successfully:

```bash
git status
```

You should see output similar to:

```text
On branch main
Your branch is up to date with 'origin/main'.

nothing to commit, working tree clean
```

To check the project files, run:

```bash
ls
```

**Optional: Open the project in Visual Studio Code**

If you have VS Code installed, run:

```bash
code .
```

**Note:** Make sure Git is installed before cloning the repository. You can check its installation using:

```bash
git --version
```

### 2. Start the Environment
Run the Docker Compose command to build the application and start the services in the background:
```bash
docker compose up -d
```
*Note: On the very first launch, Docker will automatically detect the `.sql` dump file inside the project and import it into the MySQL database. This may take a minute.*

### 3. Access the Store
Once the containers are running, you can access the website using your browser:
* **Frontend (Storefront):** [http://localhost:8080](http://localhost:8080)
* **Backend (Admin Panel):** [http://localhost:8080/admin](http://localhost:8080/admin)

## Configuration Details

The environment sets up two interconnected containers:
1. **`opencart_app`**: The Apache/PHP web server running your OpenCart source code (accessible via port `8080`).
2. **`opencart_db`**: The MySQL 5.7 database server (accessible internally by the app via port `3306`).

### Database Credentials
If you need to connect to the database manually or adjust your `config.php` files, use these predefined environment credentials:
* **DB Hostname:** `db` *(do not use localhost, use the service name)*
* **DB Username:** `opencart_user`
* **DB Password:** `opencart_password`
* **DB Name:** `opencart_db`

## Useful Commands

* **Stop the project:** `docker compose down`
* **View application logs:** `docker compose logs -f web`
* **Restart the project:** `docker compose restart`
