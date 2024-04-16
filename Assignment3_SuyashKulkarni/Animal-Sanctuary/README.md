<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Animal Sanctuary Project

## Overview

Welcome to the Animal Sanctuary project! This project aims to manage the animals housed within a sanctuary, along with their feeding schedules. The project includes a database with two main tables: `animals` and `feeding_schedule`. The `animals` table contains information about each animal, while the `feeding_schedule` table manages the feeding schedules for each animal.

## Tables

### Animals

The `animals` table stores information about each animal residing in the sanctuary. Each animal entry includes the following fields:

- **ID**: Unique identifier for the animal.
- **Animal_Name**: The name of the animal.
- **Species**: The species to which the animal belongs.
- **Join_date**: The date when animal entered the sanctuary.


### Feeding Schedule

The `feeding_schedule` table manages the feeding schedules for each animal. Each schedule entry includes the following fields:

- **ID**: Unique identifier for the feeding schedule.
- **Animal ID**: Foreign key referencing the animal for which the schedule is created.
- **Feeding_Time**: The time at which the animal is fed.
- **Feeding_Frequency**: The frequency of providing food to the animal.
- **Quantity**: The quantity of food provided.

## Functionality

### Viewing Animals

- List all animals along with their details from the `animals` table.
- Clicking on a particular animal provides more detailed information, including their feeding schedule.

### Viewing Feeding Schedule

- Each animal's detailed view includes their feeding schedule.
- CRUD functionality for feeding schedule:
  - **Create**: Add a new feeding schedule for an animal.
  - **Read**: View the existing feeding schedule for an animal.
  - **Update**: Modify the feeding schedule for an animal.
  - **Delete**: Remove a feeding schedule entry for an animal.

## Getting Started

1. **Database Setup**: Ensure that you have a database set up with the appropriate tables (`animals` and `feeding_schedule`).
2. **Connect to Database**: Update the database connection settings in your project to connect to your database.
3. **Run the Application**: Start the application to begin managing the animal sanctuary and their feeding schedules.
