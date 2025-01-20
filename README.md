![title1](https://github.com/user-attachments/assets/96aa4f36-f29b-40f5-b682-d70fd9738ba9)

<br><br>

<!-- project philosophy -->
![title2](https://github.com/user-attachments/assets/92f01b88-8642-4c5e-be0b-29ec81677118)

> Fan Tales is a vibrant online platform dedicated to fanfiction lovers, whether they enjoy reading or writing. 
> Fan Tales aims to streamline the process by providing a user-friendly platform for users to write their fanfictions and readers can visit story repositories and enjoy fanfictions.

### User Stories

#### Reader
- **View Content**: As a reader, I want to browse repositories so that I can explore fanfiction and discover interesting stories.
- **Bookmark Repository**: As a reader, I want to bookmark my favorite repositories so that I can access them later easily.
- **Explore book library**: As a reader, I want to be able to explore the book library provided to writers.

#### Admin
- **Block users**: As an admin, I want to view and block any user.
- **Delete users**: As an admin, I want to delete any user.
- **Add Admins**: As an admin, I want to add admins.

#### Writer
- **Create Fanfiction**: As a writer, I want to write and publish fanfiction so that readers can enjoy my stories.
- **View Books**: As a writer, I want to use a library of existing books to read and fork from creating fanfiction from the original book.
- **Edit Repository**: As a writer, I want to edit my fanfiction repositories so that I can improve or update my stories.


<br><br>
<!-- Tech stack -->
![title3](https://github.com/user-attachments/assets/45e06481-e2a1-45c7-8f07-dad81d0fc32e)

###  Fan Tales is built using the following technologies:

- This project uses the [React](https://react.dev/) framework. React is a versatile JavaScript library for building user interfaces, enabling developers to create applications for the web, mobile, and even desktop platforms using a single codebase with the help of frameworks.

- For persistent storage (database), the app uses [Laravel](https://laravel.com/) built-in Eloquent ORM, which allows the app to define custom storage schemas and interact seamlessly with a database. Laravel supports various database systems such as MySQL, PostgreSQL, SQLite, and SQL Server, enabling efficient and scalable data management.

- The app utilizes Amazon S3 for storing media and other assets. S3 ensures secure, scalable, and durable storage, making it easy to manage and access large files such as images and documents.
<br><br>
<!-- UI UX -->
![title4](https://github.com/user-attachments/assets/4e19d9a8-8160-4747-94ae-8122040e5c6f)


> We designed Fan Tales using wireframes and mockups, iterating on the design until we reached the ideal layout for easy navigation and a seamless user experience.

- Project Figma design [figma](https://www.figma.com/design/GTn0ioD06t7FcmZWP8nozF/FanTales?node-id=0-1&node-type=canvas&t=8TJPUpsIxGuCbiBE-0)


### Mockups
| Reader Landing screen  | Login Screen | 
| ---| ---|
| ![reader landing-mockup](https://github.com/user-attachments/assets/830aebe7-daaf-4e1f-9fa8-2018b667668e) |![login-mockup](https://github.com/user-attachments/assets/f317e92f-4fe4-4fcd-9989-ad9d57faf330) | 



<br><br>

<!-- Database Design -->
![title5](https://github.com/user-attachments/assets/f20d8d23-a683-498e-a2fb-fd6e9a7b8c62)

###  Architecting Data Excellence

<!-- - Insert ER Diagram here -->
![Screenshot (116)](https://github.com/user-attachments/assets/8abd0ef7-fd88-4fd9-8ad9-977e14c42410)



<br><br>


<!-- Implementation -->
![title6](https://github.com/user-attachments/assets/426380c6-b044-433a-8a5f-27b8af25925a)

 
### User Screens

| **Forking From Book**                          | **AI Generated Book Cover**                       |
|------------------------------------------------|--------------------------------------------------|
| ![FanTales1 gif](https://github.com/user-attachments/assets/f6d2c79c-d18f-468e-b914-ebace14031d3) | ![FanTales2 gif](https://github.com/user-attachments/assets/d00bec51-5a64-4f8b-883a-9c63c13e134f) |

| **Writer Home Screen**                         | **Writer Bookmarks**                              |
|------------------------------------------------|--------------------------------------------------|
| ![Writer HomeScreen](https://github.com/user-attachments/assets/64176ba7-2fe8-48e9-a68f-be979934c6b8) | ![Writer Bookmarks](https://github.com/user-attachments/assets/6397f5ae-f5d4-416f-8fa8-cb1f3525646d) |

| **Reader Bookmarks**                           | **Reader Library**                               |
|------------------------------------------------|--------------------------------------------------|
| ![ReaderBookmarks](https://github.com/user-attachments/assets/e66f9848-1015-44b1-947f-0fd390d82844) | ![Reader Library](https://github.com/user-attachments/assets/f532ff8a-3d25-4afc-8676-1197a0075eb3) |


### Admin Screens (Web)
| Login screen  | Register screen |  Landing screen |
| ---| ---| ---|
| ![Login](https://github.com/user-attachments/assets/f7abb72d-d09f-4784-9fde-52a524c420ff) |![Admin_Register](https://github.com/user-attachments/assets/f3ebeb45-3de3-4d2f-93f9-8fae84bbfaa5)|![Admin_Landing](https://github.com/user-attachments/assets/12630435-a1cc-4510-b67b-90d7ab222a3f) |
<!--| Home screen  | Menu Screen | Order Screen |
| ![Landing](./readme/demo/1440x1024.png) | ![fsdaf](./readme/demo/1440x1024.png) | ![fsdaf](./readme/demo/1440x1024.png) | -->

<br><br>


<!-- Prompt Engineering -->
![title7](https://github.com/user-attachments/assets/a674fbb0-04c1-479f-9323-e68f8a25ff32)

###  Mastering AI Interaction: Unveiling the Power of Prompt Engineering:

- This project uses advanced prompt engineering techniques to optimize the interaction with natural language processing models. By skillfully crafting input instructions, we tailor the behavior of the models to achieve precise and efficient language understanding and generation for various tasks and preferences.

###  AI Tools Utilized:

- OpenAI DALL-E 3. Its main purpose is to generate high-quality book cover images for repositories created by the writers. It was provided  detailed descriptions of the fanfiction’s themes, characters, and setting to create visually appealing and story-relevant cover art.

- OpenAI GPT -3.5- Turbo. It Powers a chatbot that assists writers in developing fanfiction. Through providing the model with a clear role.
<br><br>

<!-- AWS Deployment -->
<!--![title8](https://github.com/user-attachments/assets/3cd2cdbf-a7ec-4c2f-b024-d025f5ac7428)

###  Efficient AI Deployment: Unleashing the Potential with AWS Integration:

- This project leverages AWS deployment strategies to seamlessly integrate and deploy natural language processing models. With a focus on scalability, reliability, and performance, we ensure that AI applications powered by these models deliver robust and responsive solutions for diverse use cases.

<br><br>-->

<!-- Unit Testing -->
<!--![title9](https://github.com/user-attachments/assets/e92348cd-1c82-4341-bec1-a23ef6ce060b)

###  Precision in Development: Harnessing the Power of Unit Testing:

- This project employs rigorous unit testing methodologies to ensure the reliability and accuracy of code components. By systematically evaluating individual units of the software, we guarantee a robust foundation, identifying and addressing potential issues early in the development process.

<br><br>-->


<!-- How to run -->
![title10](https://github.com/user-attachments/assets/bceaf61a-125c-490b-9e2d-f86da36e0393)

> To set up FanTales locally, follow these steps:

### Prerequisites

Make sure you have the following installed on your system:
- **Node.js** (Latest stable version)
- **Composer** (For Laravel dependencies)
- **PHP** (8.1 or higher)
- **MySQL** (Or any preferred database system)
- **Git**

### Installation

1. Clone repository and its submodules
   ```sh
   git clone --recurse-submodules https://github.com/RyanChehab/FanTales.git
   ```
2. Change directory to frontend submodule
   
   ```sh
   cd frontend
   ```
   
3. Install npm dependencies for the frontend
   
   ```sh
   npm install
   ```
   
4. Change Directory to backend

   ```sh
   cd ../backend
   ```
5. Run composer install to install Laravel and its dependencies

   ```sh
   composer install
   ```
6. Navigate to .env file and set the following:
     ```
     Set db connection :
      DB_CONNECTION=mysql
      DB_HOST=
      DB_PORT=
      DB_DATABASE=
      DB_USERNAME=
      DB_PASSWORD=

8. Migrate schemas:

   ```sh
   php artisan migrate
   ```
9. Set the AWS S3 configuration:
   ```
   AWS_ACCESS_KEY_ID=
   AWS_SECRET_ACCESS_KEY=
   AWS_DEFAULT_REGION=
   AWS_BUCKET=
   AWS_URL=

10. Get OpenAI secret key and add it in the env:
    ```
    OPENAI_BASE_URL=https://api.openai.com
    OPENAI_API_KEY=

#### Generate JWT Secret Key
After setting up your `.env` file, generate a unique JWT secret key by running the following command in the backend directory:

```sh
php artisan jwt:secret
```
#### Run servers

```sh
php artisan serve
```
Navigate to frontend

```sh
cd ../frontend
```
Start project 

```sh
npm start 
```

Now, you should be able to run FanTales locally and explore its features.
