<h1>Project: "School notes"</h1>

<h2>1. Project description:</h2>
<ul>
<li>The client is a school that has asked us for an app to manage its students data and scores.</li>
<li>Students will be able to view their exams marks.</li>
<li>Their teacher will be able to add, modify and delete both students and their marks.</li>
</ul>

<h2>2. User stories:</h2>

<h3>2.1 User Story (User):</h3>
<ul>
<li>See the page.</li>
<li>They can see their marks.</li>
<li>They can see their information.</li>
</ul>

<h3>2.2 User Story (Administrator):</h3>
<ul>
<li>View the app as admin.</li>
<li>Access their student information and marks.</li>
<li>Add new students and marks.</li>
<li>Delete students and marks.</li>
<li>Edit students and marks.</li>
</ul>



## 3. Team Members

| Name | Role | |
| :--- | :---: | :---: |
| Paloma Ruíz |  Scrum Master | https://github.com/birdsinyourgarden |
| Alba Rus | Product Owner | https://github.com/Albaric0que |
| Camila Ruíz  | Developer | https://github.com/camilaruiz17 |
| Himorell Jaramillo | Developer | https://github.com/Himorell |
| Raquel Palomo | Developer| https://github.com/raquel2002x|


<h2>4. Atomic Design</h2> 
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:250px; height:400px; margin:12px" src="public/css/img/imageAtomicD.png" alt="Atomic Design"/>
</div>

<h2>5. Final Design</h2> 
<div style="heigth:auto; display:flex; flex-wrap:wrap; justify-content:center; padding:1rem">

| Login |  Home View |  Student View |  Student Show View | Score View |
| --- | --- | --- | --- | --- |
| <img style="width:150px;" src="public/css/img/imageLogin.png" alt="Login"/> | <img style="width:150px;" src="public/css/img/homeView.png" alt=""/> | <img style="width:150px;" src="public/css/img/studentView.png" alt=""/> |  <img style="width:150px;" src="public/css/img/studentShowView.png"/> | <img style="width:150px;" src="public/css/img/scoreView2.png"/> |

</div>


<h2>6. Stacks</h2>
<ul>
<li>HTML5</li>
<li>CSS3</li>
<li>JavaScript</li>
<li>PHP 8.1.10</li>
<li>Laravel</li>
<li>Boostrap 5</li>
<li>DrawSQL</li>
<li>MySQL</li>
</ul>

<h2>7. Required:</h2>
<li>Composer & Laravel Installed</li>
<li>XAMPP/LAMPP Installed</li>
<li>NPM Installed</li>
<li>MySQL</li>
<li>PHP</li>
<li>PHP Artisan Serve</li>

<h2>8. How to install this project:</h2>

You will need a text editor and perform the following steps:

1. Clone the project
```bash
  git clone https://github.com/Himorell/springfieldElementarySchool
```

2. Go to the project directory
```bash
  cd springfieldElementarySchool
```

3. Create a MySQL database named "springfieldelementaryschool"

4. Locate .env.example in the project and once there change the database name that comes by default for our database name (laravel for springfieldelementaryschool). After that, remove .example from the file name so its new name will be .env

5. Install dependencies
```bash
  npm install
```
```bash
  composer install
```

6. Activate the server and keep this terminal open
```bash
  npm run dev
```

7. Run the PHP server and keep this terminal open
```bash
  php artisan serve
```

8. Import database
```bash
  php artisan migrate:fresh --seed
```

***

 <h2>9. Tests</h2>

To run the php tests, execute the following command(s)
```bash
  php artisan test
```
<img width="259" alt="Screenshot test" src="public/css/img/phpTest.png">


To run the vendor tests, execute the following command(s)
```bash
  vendor/bin/phpunit
```
<img width="259" alt="Screenshot test" src="public/css/img/vendorTest.png">


<h2>10. Methodology:</h2>
<ul>
<li>Mob programming.</li>
<li>Pair programming.</li>
<li>Agile with SCRUM</li>
<li>TDD</li>
</ul>


<!-- <h2>11. Next Steps</h2>
<ul>
<li>Continue to implement the CRUD.</li>
<li>Continue implementing the design.</li>
<li>Continue implementing functionalities.</li>
</ul> -->
