# Election Management System

## Project Overview

The Election Management System is a web application designed to streamline the organization and oversight of electoral processes in Argentina. This application enables users to record electoral events, political parties, and votes, providing a centralized platform for managing elections. The provinces are preloaded.
#### Database Diagram
In the Database folder, you can find the diagram of the database model.

## Key Features

1. **Election Management**: Users can create, edit, and delete elections. "Election" means the date on which an election is held. Each election is distinguished by its date.

2. **Political Party Registration**: The application allows users to create political parties, assigning them a name, presidential and vice-presidential candidates, along with a URL for the logo. At the app, they are called "alternatives" to include Blank and Spoiled votes.

3. **Vote Registration**: Votes can be recorded for each candidate in a specific election and province. The results are automatically updated.

4. **Election Results Visualization**: The application displays election results discriminated by elections, province and candidates.

## Registration Requirements

To access the management features, users must register and authenticate on the platform. Registration involves providing an email address and a password.

## Technologies Used

This project was built using various technologies and tools, such as:

- **Laravel 10**: A development framework designed for web applications in PHP.
- **Tailwind CSS**: Used to create a responsive and visually appealing user interface.
- **Jetstream**: Provides an authentication system and dashboard templates.
- **Blade**: A template engine that simplifies the creation of views in Laravel.

## Installation and Configuration

To run the application in your local environment, follow these steps:

1. Clone the repository from GitHub: `git clone https://github.com/franenlanube/BootcampFS-PHP.git`. Project is located in `CursoPHP-Sprint4-Laravel/ArgenineElections`
3. You can open the project in Visual Studio Code: `code "BootcampFS-PHP/CursoPHP-Sprint4-Laravel/ArgentineElections"`
4. At your IDE, in this case is VSC, open a terminal and install project dependencies: `composer install` (Standing on ArgentineElections folder).
5. Install npm dependencies: `npm install`.
6. Copy the `.env.example` file and rename it to `.env`. Configure environment variables, such as the database connection. __You can run `cp .env.example .env` to do it for you.__
7. Create an empty database on your localhost (mysql/data folder) with the name defined in the `.env` file (already done if you ran `cp .env.example .env`).
8. Generate a new application key: `php artisan key:generate`.
9. Open XAMPP and start the Apache and MySQL services.
10. Run database migrations: `php artisan migrate --seed`.
11. Compile the front-end assets using `npm run dev`.
12. In another terminal, navigate to the ArgentineElections folder, and run `php artisan serve` to open the project in your web browser.

With these steps completed, you can access the application from your local browser using the URL provided by the local server.

## Usage

1. Explore the content of the web application and access all sections, except for the management areas.
2. If you wish to use the management functions, create a new account or log in as a registered user.
3. Once authenticated, you can access various areas of the application, including election management, political parties, and vote registration.

## Contributions

If you want to contribute to the development of this application, you are welcome to do so. You can fork the repository, make necessary changes, and send a pull request.

## License

This application is distributed under the MIT License. For detailed information, refer to the `LICENSE` file located within the project folder: ArgentineElections.
