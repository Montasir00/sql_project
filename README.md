# 🏋️ Gym Management System

## 📌 Overview
The **Gym Management System** is a web-based administrative application designed to streamline and centralize gym operations. It enables administrators to manage gym locations, members, trainers, and payments through a secure, session-based interface.

The system is built using a **containerized LAMP-style architecture**, ensuring consistent deployment, easy setup, and modular development.

---

## 🎯 Purpose & Scope
This project demonstrates practical skills in:
- Relational database design
- CRUD-based backend development
- PHP–MySQL integration
- Containerized deployment using Docker

The application is intended for **single-admin usage**, focusing on internal gym management rather than public access.

---

## 🧱 System Capabilities
Administrators can:
- Manage multiple gym locations
- Register and manage members
- Assign trainers to members
- Define and track payment structures
- Monitor membership payments
- Search records across all entities
- Maintain referential integrity through manual cascading operations

---

## 🛠 Technology Stack

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

## 🐳 Containerized Infrastructure

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

## 🗂 Project Structure
.
├── docker-compose.yml
├── Dockerfile
├── data/ # MySQL persistent storage
├── src/
│ ├── config.php # Database connection
│ ├── index.php # Login system
│ ├── home.php # Central router/dashboard
│ ├── logout.php
│ ├── gym.sql # Database schema
│ ├── execute_query.php # Initialization queries
│ ├── add_.php
│ ├── manage_.php
│ ├── update_.php
│ ├── delete_.php
│ └── *_search.php

---

## 🔐 Authentication
- Login handled via `index.php`
- Credentials validated against `login` table
- PHP sessions maintain authentication state
- Unauthorized access is restricted

---

## 🧩 Core Modules

### CRUD Entity Support
| Entity | Add | View | Update | Delete | Search |
|------|-----|------|--------|--------|--------|
| Gym | add_gym.php | manage_gym.php | update_gym.php | delete_gym.php | gym_search.php |
| Member | add_member.php | manage_member.php | update_member.php | delete_member.php | member_search.php |
| Trainer | add_trainer.php | manage_trainer.php | update_trainer.php | delete_trainer.php | trainer_search.php |
| Payment | add_payment.php | manage_payment.php | update_payment.php | delete_payment.php | payment_search.php |

---

## 🧪 Data Validation
- Primary key uniqueness checks
- Foreign key existence verification
- Input sanitization using `mysqli_real_escape_string()`

---

## 🔗 Cascading Deletes (Manual)
To maintain referential integrity:
- **Deleting a Gym** → deletes members → trainers → payments → gym
- **Deleting a Trainer** → deletes related members → trainer

This compensates for the absence of `ON DELETE CASCADE` constraints.

---

## 🧠 Architecture Overview

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

## 🗃 Database Schema Summary

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

## 🚀 Deployment
Run the project using Docker:
```bash
docker-compose up --build
📌 Development Notes

Procedural PHP used for learning clarity

Focus on SQL, schema design, and backend fundamentals

Designed as an academic and portfolio project

📄 License

This project is intended for educational and portfolio use.
