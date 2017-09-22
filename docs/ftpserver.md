## Install ftp-git
``` bash
# install homebrew globally
/usr/bin/ruby -e "$(curl -fsSL https:#raw.githubusercontent.com/Homebrew/install/master/install)”

# install git globally
brew install git

# install curl globally
brew install curl --with-ssl --with-libssh2

# install git-ftp globally
brew install git-ftp
```

## Clone the ftp 
``` bash
# with http
git clone https://github.com/lennartvanheuckelom/construct-sp.git

# or with ssh
git clone git@github.com:lennartvanheuckelom/construct-sp.git
```

## Set the global variables
``` bash
# set the ftp url
git config git-ftp.url ftp.constructsp.be/public_html

# set the ftp admin username
git config git-ftp.user ADMINUSERNAME

# set the ftp admin password
git config git-ftp.password ADMINPASSWORD
```

## Push to Github and FTP server
``` bash
# commit and push to github
git add .
git commit -m "some commit message"
git push

# push to the server
git ftp push
```