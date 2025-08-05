# Rwanda Administrative Divisions - Laravel Seeders

## 📌 Overview

This repository provides a complete Rwanda's administrative structure (Provinces, Districts, Sectors, Cells, and Villages) that will be helpful to software developers especially for Laravel applications developers.

## 🚀 Implementation

1. **Copy these files to your Laravel project:**
   - Models: `app/Models/` (Province.php, District.php, Sector.php, Cell.php, Village.php)
   - Migrations: `database/migrations/` (create_rw_*_tables.php)
   - Seeders: `database/seeders/` (*Seeder.php)

   **OR**

   **Clone the whole repository (Not recommended)**
```bash
git clone https://github.com/Yonkuru/Rwanda-Administrative-Divisions-Laravel-Seeder.git
```

2. **Run migrations:**
```bash
php artisan migrate
```
3. **Seed the database (optional):**
```bash
php artisan db:seed
```

## 🔧 Database Structure
The package creates the following tables with relationships:

1. **rw_provinces** - Rwanda's provinces
    - *prv_id* (primary key)
    - *prv_name*
    - *timestamps*
2. **rw_districts** - Districts within provinces
    - *dst_id* (primary key)
    - *dst_province* (foreign key to rw_provinces)
    - *dst_name*
    - *timestamps*
3. **rw_sectors** - Sectors within districts
    - *sct_id* (primary key)
    - *sct_district* (foreign key to rw_districts)
    - *sct_name*
    - *timestamps*
4. **rw_cells** - Cells within sectors
    - *cel_id* (primary key)
    - *cel_sector* (foreign key to rw_sectors)
    - *cel_name*
    - *timestamps*
5. **rw_villages** - Villages within cells
    - *vlg_id* (primary key)
    - *vlg_cell* (foreign key to rw_cells)
    - *vlg_name*
    - *timestamps*

## 🏗️ Relationships
- *Province → hasMany → District*
- *District → belongsTo → Province*
- *District → hasMany → Sector*
- *Sector → belongsTo → District*
- *Sector → hasMany → Cell*
- *Cell → belongsTo → Sector*
- *Cell → hasMany → Village*
- *Village → belongsTo → Cell*
