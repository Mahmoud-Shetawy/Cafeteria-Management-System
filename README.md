# **Cafeteria-Management-System**

## **Overview**

The **Cafeteria Management System** is a PHP-based web application designed to streamline cafeteria operations, providing both **Admin** and **User** interfaces for enhanced management and user interaction.

## **Features**

### **User View**

#### **1. User Authentication**

-   Users can log in with their username and password.
-   Password reset functionality is available via email using **PHPMailer**.

#### **2. Order Selection**

-   Cafeteria products are displayed with clickable images.
-   Users can adjust the quantity and add notes for product customization.
-   Users select a room from a drop-down menu.
-   The total price is updated dynamically as items are selected.
-   Orders are submitted and displayed, with the most recent orders appearing first.

#### **3. Order Management**

-   Users can view their order history, with the option to filter by date range.
-   Orders have different statuses: **Processing**, **Out for Delivery**, and **Done**.
-   Users can cancel orders that are still in the "Processing" status.
-   Clicking on an order shows its details.

### **Admin View**

#### **4. Product Management**

-   Admins can view, add, and remove products.

#### **5. User Management**

-   Admins can view, edit, or delete users.
-   Admins can add new users via a form.

#### **6. Product Categories**

-   Admins can manage product categories and add new ones.

#### **7. Order Reports**

-   Admins can view orders within a specified date range.
-   Orders can be filtered by user.

#### **8. Current Orders Management**

-   Admins can manage orders that need processing.
-   Clicking on an order displays its details.

## **Technology Stack**

-   **Backend:** PHP (Laravel or Core PHP)
-   **Frontend:** HTML, CSS, JavaScript
-   **Database:** MySQL
-   **Authentication:** PHP sessions, bcrypt hashed passwords

## **Project Structure**

```
📂 Cafeteria-Management-System
 ├── 📂 assets       # Static files (CSS, JS, images, videos)
 ├── 📂 config       # Configuration files
 ├── 📂 include      # Reusable PHP components
 ├── 📂 pages        # Frontend pages (user interface)
 ├── 📂 server       # Backend logic (API, database interactions)
 ├── README.md       # Project documentation
 └── index.php       # Main entry point
```

## **Installation**

Follow the steps below to set up the project locally:

1. Clone the repository:
    ```sh
    git clone git@github.com:Mahmoud-Shetawy/Cafeteria-Management-System.git
    ```
2. Navigate to the project directory:
    ```sh
    cd Cafeteria-Management-System
    ```
3. Configure the database settings in the `config/database.php` file.
4. Run the application on a local server (e.g., XAMPP, MAMP, Laravel Artisan):
    ```sh
    php -S localhost:8000
    ```

## **Run Project (Video Guide)**

A demo video detailing the setup and usage guide is available in the project folder:

```
📂 assets/video/demo.mp4
```

You can open the video file manually or use any video player to view the guide.
