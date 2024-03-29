<h1 align="center">
  <img
    width="300"
    alt="youtube"
    src="https://live.staticflickr.com/65535/53495811903_90892c34a9_m.jpg">
</h1>

---
<h3 align="center">
  <strong>
      📹 Youtube clone 📹
  </strong>
</h3>

---
<p align="center">
  <img 
    width="800"
    alt="home"
    src="https://live.staticflickr.com/65535/53496770015_47768548ed.jpg"/>
</p>

---

## Live Demo
[Live Demo Link (Waiting...)]()

---

## Description

### Youtube clone

Embark on a multimedia journey with the Full Stack YouTube Clone, a harmonious fusion of Vue.js, Javascript, Tailwind CSS, Laravel, Inertia JS, and PHP. This comprehensive web application seamlessly replicates YouTube's core functionalities, offering a responsive and dynamic user interface. Users can contribute seamlessly by adding videos with titles, thumbnails, and content, while also enjoying the power to manage their uploads through an intuitive delete feature. Navigate through the animated hamburger menu, engage in a realistic environment with dynamically generated likes, views, and comments, and explore personalized recommendations. This Full Stack YouTube Clone promises a rich and immersive user experience, empowering users with the ability to both contribute and curate content effortlessly.

---

## Home Page

Dive into the immersive world of the Full Stack YouTube Clone's Home Page, where content creators and viewers converge in a seamless digital experience. This Vue.js-powered interface boasts a responsive grid layout showcasing user-created videos with details like likes, comments, views, and upload time. The dynamic hamburger menu, adorned with smooth animations, adds a touch of elegance to navigation. Explore recommended videos intelligently curated for each user, ensuring a personalized journey.

<p align="center">
  <img width="400" src="https://live.staticflickr.com/65535/53496328336_ecd52440ae_z.jpg" alt="Image 1">
  
  <img width="200" src="https://live.staticflickr.com/65535/53496628124_b0c57e76e2_n.jpg" alt="Image 2">
  
  <img width="150" src="https://live.staticflickr.com/65535/53496628109_2433e0d853_n.jpg" alt="Image 3">
</p>

---

## Add Video Page

- This meticulously designed Vue.js-powered interface offers content creators a seamless platform to upload and share their masterpieces. The user-friendly form captures essential details, including the video title, a captivating thumbnail, and the dynamic video file in MP4 format. With real-time error handling and intuitive UI elements, the page ensures a smooth uploading process.

The minimalist yet visually appealing layout, adorned with vibrant accents and a dark theme, enhances the user experience. Users can effortlessly navigate through the form, supported by dynamic feedback on any missing or incorrect information. The page encapsulates a perfect blend of functionality and aesthetics, empowering creators to showcase their content effortlessly on this modern YouTube clone.

<p align="center">
  <img width="400" src="https://live.staticflickr.com/65535/53496636079_6db7a8f141.jpg" alt="Image 1">
  
  <img width="200" src="https://live.staticflickr.com/65535/53496486498_6c573f22db_n.jpg" alt="Image 2">
  
  <img width="150" src="https://live.staticflickr.com/65535/53496636094_4853e42183_n.jpg" alt="Image 3">
</p>

---

## Delete Video Page

- The "Delete Video" page provides a straightforward and efficient interface for managing your uploaded videos. Each entry in the table displays a preview of the video along with its title, offering a quick overview of your content.

The page layout is carefully designed to prioritize clarity and ease of use. Video titles are presented prominently, and users can effortlessly delete videos with a single click using the intuitive "Delete" button. The dynamic presentation of video previews enhances the overall user experience, allowing content creators to identify and manage their videos seamlessly.

With a clean and modern aesthetic, the "Delete Video" page is an integral part of the Full Stack YouTube Clone, empowering users to curate and control their content effortlessly.

<p align="center">
  <img width="400" src="https://live.staticflickr.com/65535/53496761915_cd1358673e.jpg" alt="Image 1">
  
  <img width="200" src="https://live.staticflickr.com/65535/53496490528_3b9bbd17f0_n.jpg" alt="Image 2">
  
  <img width="150" src="https://live.staticflickr.com/65535/53496340666_5031febd34_n.jpg" alt="Image 3">
</p>

---

## Video Page

- This visually engaging and user-friendly space is designed to showcase a curated selection of videos tailored to your preferences.

As you hover over each video card, a dynamic preview unfolds, seamlessly transitioning from a thumbnail to a video player, providing a sneak peek into the content. The smooth play/pause interaction enhances user control, allowing you to decide which video captures your interest.

The layout is thoughtfully arranged, with each video accompanied by essential details such as the video title, uploader, and view count. The inclusion of a verification badge adds credibility to the uploader, ensuring a trustworthy and enjoyable viewing experience.

<p align="center">
  <img width="400" src="https://live.staticflickr.com/65535/53495456732_a4744315fd.jpg" alt="Image 1">
  
  <img width="200" src="https://live.staticflickr.com/65535/53496346001_6efc458f48_n.jpg" alt="Image 2">
  
  <img width="150" src="https://live.staticflickr.com/65535/53496767275_f3b896b460_n.jpg" alt="Image 3">
</p>

---

<p align="center">
  <img width="400" src="https://live.staticflickr.com/65535/53496651584_2e5d6d95f5.jpg" alt="Image 1">
  
  <img width="200" src="https://live.staticflickr.com/65535/53496501928_dfee0f0530_n.jpg" alt="Image 2">
  
  <img width="150" src="https://live.staticflickr.com/65535/53496651984_0075b01e0a_n.jpg" alt="Image 3">
</p>

---

## Table of Contents
- [Key Features](#key-features)
- [Installation](#installation)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)
  
--- 

## Key Features

- **Upload and Showcase:** Seamlessly upload your videos and create an immersive showcase that reflects your style. Add captivating titles and thumbnails to make your content stand out.

- **Intuitive Video Management:** Manage your uploaded videos with ease. Edit titles, update thumbnails, and keep track of views and comments in one centralized hub.

- **User-Friendly Interface:** Our user-friendly interface ensures a smooth uploading experience. A few clicks, and your content is ready to be shared with the world.

- **Interactive Video Player:** Engage your audience with an interactive video player that supports smooth playback. Users can easily play, pause, and explore your content at their own pace.

- **Verification Badges:** Build credibility with a verification badge on your profile, assuring viewers that your content is authentic and trustworthy.

---

## Installation


```
git clone https://github.com/PayamAnari/youtube-clone.git

composer install 

cp .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate

composer require laravel/breeze --dev

php artisan breeze:install vue --ssr

php artisan serve
```
---

## Technologies Used

### Backend:

- **Laravel 10** for robust server-side functionality.
- **MySQL database** for efficient data storage.

### Frontend:

- **Vue.js 3** for dynamic and reactive user interfaces.
- **Inertia.js** for server-side rendering, enhancing frontend performance.
- **Tailwind CSS** for a utility-first styling approach, ensuring a responsive and visually appealing design.

<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=js,vue,tailwind,mysql,php,laravel" />
      <a href="https://inertiajs.com/">
    <img src="https://img.shields.io/badge/Inertia.js-3-lightblue" alt="Inertia.js">
    <img src="https://img.shields.io/badge/Blade-Used-brightgreen" alt="Blade">

  </a>
  </a>
</p>

---

## Contributing

Contributions to the Instagram Clone App are highly encouraged! If you'd like to contribute, please follow these steps:

1. ### Fork the Repository:
Fork this repository to your GitHub account.

2. ### Create a New Branch: 
Create a new branch for your feature or bug fix.

3. ### Make Changes: 
Implement your changes or additions.

4. ### Commit and Push: 
Commit your changes and push them to your forked repository.

5. ### Submit a Pull Request: 
Create a pull request to the original repository, explaining your changes and their significance.

---

## License
This project is licensed under the [MIT License](LICENSE).

---

### Built with ❤️ by Payam Anari

Thank you for exploring the Gym Fitness app! If you have any questions, feedback, or just want to say hi, feel free to [reach out](mailto:anari.p62@gmail.com). Happy fitness journey!

---
