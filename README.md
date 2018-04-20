# Theme Folder Structure & Theme Files
[id]: https://octodex.github.com/images/dojocat.jpg  "The Dojocat"
1. **yourthemename.info.yml**: this mandatory file gives information about your theme
2. **libraries.yml**: defines your libraries (mostly your JS, CSS files).
3. **breakpoints.yml**:  defines the points to fit different screen devices.
4. **Theme**: The PHP file that stores conditional logic and data preprocessing of the variables before they are merged with markup inside the page.html.twig file. 
5. **/css**: where your css files lay. Must be defined in the info, and libraries file to operate.
6. **/js**: where your js files lay. Must be defined in the info, and libraries file to operate.
7. **/images**: where you theme images are stored. It is a good practice to put images in this folder.
8. **/includes**: where 3rd-parties libraries (like Bootstrap, Font Awesome,etc) are put. It is a good practice to store them in this folder
9. **/templates**: where all your template files (ones that provide html markup of your theme page) are placed.
10. **logo.png**: your theme logo if you're using one.
11. **favicon.ico**: your theme favicon if you're using one
12. **screenshot.png**: your theme screenshot that will be displayed in the admin/appereance.
# How to create ?
### Step1: Create Theme Directory
Go to the **theme** folder: Create a new folder here and ensure that it is named exactly as the name of the theme.

### Step2: Create **yourthemename.info.yml** file
1. Move inside the folder created and create a new file here with the name: **yourthemename.info.yml**
2. Open the YML file  enter the following details:
- name: yourthemename
- description: your_theme_description
- type: theme
- core: 8.x
- Basic theme: (optional yet recommended)
Indicate what base theme your custom theme will inherit. If not defined, Drupal will use “Stable” as your base theme.
- region (optional): define the regions of the theme where you place your blocks. 
### Step3: Add reference to the CSS file that will be used for the theme:
1. Go to the theme’s folder and create a new file named **yourthemename.libraries.yml**
2. Edit this file to add CSS: (see the following screenshot).

3. Now, add the library in the  yourthemename.info.yml file as well. To do this, add the text in the file (see the following screenshot).

### Step4: Add JavaScript Reference
1. To add reference to the JavaScript reference to the theme, check out the following screenshot to add the text snippet to the **libraries.yml** file

2. Now, add the the JavaScript library in the **info.yml** file.

### Step5: Add Boostrap	
1. To add reference to the b to the theme, check out the following screenshot to add the text snippet to the **libraries.yml** file.

2. Now, add the the boostrap library in the **info.yml** file.

### Step6: Adding Regions to a Theme
1. Adding region meta-data to your **yourthemename.info.yml**  file.

2. Go to the theme’s folder and create a new folder name **templates**
3. Move inside the folder created and create a new file here with the name: **page.html.twig**
4. Editing your **page.html.twig** file and printising the new regions.

### Step7: Create main menu
1. Go to folder **templates** and create new file here with name: **menu—main.html.twig**
2. Edit your **menu—main.html.twig** file and add the text in the file (see the following screenshot)