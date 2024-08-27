# sql_project
# Introduction
### Project Overview
The Gym Management System is designed to streamline gyms' administrative tasks and member management. This system provides
functionalities to manage memberships, track payments, and manage trainer information.
## Objectives
- Develop a user-friendly system for gym management.
- Implement a reliable database to store and manage member and trainer information.
- Facilitate efficient tracking of memberships and payments.
## Project Features & Objectives
### Main Features
1. Gym Management: Admins can add, update, and delete gym information.
2. Member Management: Admins can add, update, and manage member details.
3. Payment Management: Track and manage membership payments.
4. Trainer Management: Add and manage trainer details.
### Objectives
1. Add and view different gyms.
2. Manage member details and view their status.
3. Handle payments.
4. Manage trainer information.
##Design & Connectivity
## Backend Design
The backend is developed using Python and SQL for database management. The database schema includes tables for gyms, login, members,
payments, and trainers.
### Frontend Design
The front end uses HTML, and CSS for a responsive and interactive user interface. PHP is used to handle server-side scripting and connectivity
between the front end and the back end.
## Database Design
### ER Diagram: Illustrates the relationships between gyms, members, payments, and trainers.
1. One-to-Many (1-n): One gym can have many members.
2. Many-to-Many (n-n): Members can have multiple trainers and vice versa.
3. Many-to-One (n-1): Many payments can be associated with one member.
