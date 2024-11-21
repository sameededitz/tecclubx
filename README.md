# TecClubb Company Website and Admin Panel

This project is the official website and admin panel for **TecClubb**, developed by **Sameed**. The website provides essential information about the company, its services, and a portfolio of completed projects. The admin panel allows for managing blog posts, portfolios, admin users, email inboxes, and service requests.

## Project Overview
The TecClubb Company Website showcases the company’s work and offers a clean interface for potential clients to contact or request services. The admin panel offers an array of features including managing emails, portfolios, blogs, and service requests, making it easy for administrators to handle key operations from a single platform.

## Features
- **Website**:
  - Company information display, including services, portfolio, and contact details.
  - Service request forms for potential clients to inquire about services.
  - Blogs and articles to share insights and updates about the company.
  - Team management to highlight the members behind TecClubb.
- **Admin Panel**:
  - **Email Inbox**:
    - View, organize, and manage emails directly from the admin panel.
    - Mark emails as read, starred, or delete them.
  - **Portfolio Management**:
    - Add, edit, or remove portfolio items with ease.
    - Showcase the company's work with images and descriptions.
  - **Blog Management**:
    - Publish and manage blog posts.
    - Categorize articles for better organization.
  - **Admin Users**:
    - Manage administrator roles and permissions.
    - Add or remove admin users.
  - **Service Requests**:
    - View and handle service inquiries made through the website.
    - Respond to requests and manage them efficiently.

## Installation
1. **Clone the repository**:
    ```bash
    git clone https://github.com/your-username/tecclubb-company-website-admin-panel.git
    ```
2. **Navigate to the project directory**:
    ```bash
    cd tecclubb-company-website-admin-panel
    ```
3. **Install dependencies**:
    ```bash
    composer install
    npm install
    ```
4. **Set up environment variables**:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. **Run migrations**:
    ```bash
    php artisan migrate
    ```
6. **Start the development server**:
    ```bash
    php artisan serve
    ```

## Usage
- **Admin Login**: Access the admin panel using the provided URL and your admin credentials.
- **Dashboard**: Get an overview of key website metrics and recent activity.
- **Email Inbox**: Manage your company emails, respond to messages, and organize them by category (e.g., inbox, trash, starred).
- **Portfolio Management**: Upload project images, write descriptions, and manage the portfolio section of your website.
- **Blog Management**: Write, edit, or delete blog posts to keep your company website fresh and updated.
- **Admin Users**: Add or remove admin users, assign roles, and ensure the security of your admin panel.
- **Service Requests**: View incoming service requests and respond directly to potential clients.

## Service Request Handling
The website includes service request forms, allowing potential clients to request quotes or more information about TecClubb's services. Admins can view these requests in the admin panel and respond to them without storing the form data in the database.

### Request Fields
- **Contact Form**:
  - Name
  - Email
  - Phone
  - Subject
  - Message
- **Request Quote Form**:
  - First Name
  - Last Name
  - Email
  - Phone Number
  - Company
  - Website
  - Services required (checkboxes)
  - Message

## Developer Information
- **Developer**: Sameed
- **Instagram**: [@not_sameed52](https://www.instagram.com/not_sameed52/)
- **Discord**: sameededitz
- **Linktree**: [linktr.ee/sameededitz](https://linktr.ee/sameededitz)
- **Company**: TecClubb
  - **Website**: [https://tecclubb.com/](https://tecclubb.com/)
  - **Contact**: tecclubb@gmail.com

## Contributing
Contributions are welcome! Feel free to fork the repository and submit a pull request. For major changes, please open an issue to discuss your ideas first.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact
For inquiries or support, reach out to us at:
- **Email**: tecclubb@gmail.com
