# sitebase-gulp
A gulp/npm version of [sitebase](https://kccnma.github.io/sitebase/ "Sitebase"), a minimal HTML + CSS + JS base front-end framework for simple web site projects.

## Documentation (In-Progrss/Coming Soon)
Sitebase dev work-in-progress links:
* [sitebase demo](https://kccnma.github.io/sitebase/ "Sitebase Demo")
* [sitebase documentation](https://kccnma.github.io/sitebase/documentation.html "Sitebase Docs")

## Folder Structure 

    projectname/
    ├── dist/               # final site with compiled files
    ├── src/                # pre-compiled source files such as all sass files, partials, etc.
    ├── gulpfile.js         # gulp file with all task functions 
    ├── package.json        # npm package file with a list all dependencies

## Installation Instructions
1. Before you install, make sure that you have both node and gulp already installed. You can confirm via the following commands (to be entered via CLI, such as Terminal on a MAC or Command Prompt on a PC)
~~~~
$ node -v
$ npm -v
$ gulp -v
~~~~
* Re: Node - If you do not have node installed, go to [nodejs.org](https://nodejs.org/en/ "Node JS"), download the installer package and follow the install instructions/wizard. PC users, please note that you might need to restart after install.
* Re: Gulp - If you do not have gulp installed, you must first install node/npm (see above), then install it globally via npm:
~~~~
$ npm install gulp -g
~~~~
* If you run into errors, such as a permission error when installing gulp, you can try the following potential fixes:
    * Make sure you are logged in as an administrator
    * Try changing yout permsissions manually via npm's permission fix guide page here: https://docs.npmjs.com/getting-started/fixing-npm-permissions
        * See Option 1, Step 2 - this worked for our MACs in our computer lab
    * Try installing command line tools X Code: $ xcode-select --install
    * Try installing X Code
* Once confirmed that both node and gulp have been successfully installed, you can move on to Step 2.
2. Download the sitebase-gulp.zip file (manually download the zip file and unzip/extract it somewhere you can easily access/edit locally)
    * Tip: avoid placing your local dev project directories too deep into nested folders, since you will eventually need to traverse to the them via command line
3. Via command line, traverse/change directories (cd) until you are inside of your target project working directory (sitebase-gulp)
~~~~
$ cd sitebase-gulp
~~~~
3. Once inside of your project directory (sitebase-gulp), install the project dependencies via npm by simply typing
~~~~
$ npm install
~~~~
4. Run gulp tp watch/compile your files as you 
~~~~
$ gulp
~~~~
## Conclusion
Congratulations, you just set up a local front-end development environment via npm (package manager) that uses gulp (task runner) tocompile your sass (pre-processer) files. You'll also notice that gulp is using browser-sync to spin up a local web server and to refresh your browser automatically on every file change. Gulp is also being used to auto-minimize/optimize all images.
