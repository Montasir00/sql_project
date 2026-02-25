# Gym Management System

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apache/apache-original.svg" width="22"/> Overview
The **Gym Management System** is a web-based administrative application designed to streamline and centralize gym operations. It enables administrators to manage gym locations, members, trainers, and payments through a secure, session-based interface.

The system is built using a **containerized LAMP-style architecture**, ensuring consistent deployment, easy setup, and modular development.

---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="22"/> Purpose & Scope
This project demonstrates practical skills in:
- Relational database design
- CRUD-based backend development
- PHP–MySQL integration
- Containerized deployment using Docker

The application is intended for **single-admin usage**, focusing on internal gym management rather than public access.

---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="22"/> System Capabilities
Administrators can:
- Manage multiple gym locations
- Register and manage members
- Assign trainers to members
- Define and track payment structures
- Monitor membership payments
- Search records across all entities
- Maintain referential integrity through manual cascading operations

---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="22"/> Technology Stack

### Application Stack
| Layer | Technology |
|-----|------------|
| Frontend | HTML, CSS |
| Backend | PHP 8.0 (procedural) |
| Database | MySQL 8.0 |
| Web Server | Apache HTTP Server |
| Containerization | Docker & Docker Compose |
| DB Admin Tool | phpMyAdmin |

---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="22"/> Containerized Infrastructure

### Services
| Service | Container | Purpose |
|------|-----------|---------|
| Web Server + PHP | `php1` | Executes PHP logic and serves the app |
| Database | `mysql1` | Stores all system data |
| DB Admin | `phpmyadmin1` | Web-based database management |

### Port Mapping
| Port | Service |
|----|--------|
| 9000 | Web Application |
| 3308 | MySQL |
| 8081 | phpMyAdmin |

---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg" width="22"/> Project Structure

```text
.
├── docker-compose.yml
├── Dockerfile
├── data/                     # MySQL persistent storage
├── src/
│   ├── config.php            # Database connection
│   ├── index.php             # Login system
│   ├── home.php              # Central router / dashboard
│   ├── logout.php            # Session termination
│   ├── gym.sql               # Database schema
│   ├── execute_query.php     # Database initialization queries
│   ├── add_*.php             # Create operations (Gym, Member, Trainer, Payment)
│   ├── manage_*.php          # Read/List operations
│   ├── update_*.php          # Update operations
│   ├── delete_*.php          # Delete operations
│   └── *_search.php          # Search functionality
```
---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="22"/> Authentication

- Login handled via `index.php`
- Credentials validated against the `login` table
- PHP sessions maintain authentication state
- Unauthorized access is restricted

---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="22"/> Core Modules

### CRUD Entity Support

| Entity  | Add | View | Update | Delete | Search |
|--------|-----|------|--------|--------|--------|
| Gym | add_gym.php | manage_gym.php | update_gym.php | delete_gym.php | gym_search.php |
| Member | add_member.php | manage_member.php | update_member.php | delete_member.php | member_search.php |
| Trainer | add_trainer.php | manage_trainer.php | update_trainer.php | delete_trainer.php | trainer_search.php |
| Payment | add_payment.php | manage_payment.php | update_payment.php | delete_payment.php | payment_search.php |

---

## <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="22"/> Data Validation

- Primary key uniqueness checks
- Foreign key existence verification
- Input sanitization using `mysqli_real_escape_string()`

---

## Cascading Deletes (Manual)

To maintain referential integrity:

- **Deleting a Gym** → deletes members → trainers → payments → gym
- **Deleting a Trainer** → deletes related members → trainer

This compensates for the absence of database-level `ON DELETE CASCADE` constraints.

---

## Architecture Overview

### Three-Tier Architecture

**Presentation Layer**
- HTML/CSS UI
- Routing via `home.php`
- Error handling via `errors.php`

**Business Logic Layer**
- Procedural PHP scripts
- Entity-specific validation rules

**Data Access Layer**
- Shared MySQLi connection (`config.php`)
- Raw SQL queries (no ORM)

---

## Database Schema Summary

### Tables
- gym
- payment
- trainer
- member
- login

### Relationships
- One gym → many payments
- One payment → many trainers
- One trainer → many members
- One payment → many members

---

## Database ER Diagram

<p align="center">
  <img src="src/Database%20ER%20diagram.jpeg" alt="Database ER Diagram" width="700"/>
</p>

---

## Deployment

Run the project using Docker:
```bash
docker-compose up --build
```
---
Development Notes

Procedural PHP used for learning clarity

Focus on SQL, schema design, and backend fundamentals

---
License

This project is intended for educational and portfolio use.
