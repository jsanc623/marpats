#!/bin/bash

# Force update & upgrade, debian
apt-get update
apt-get upgrade -y

# Install python and build essentials
if [dpkg -s build-essential | grep 'install ok' -ne 'Status: install ok installed' ]; then
    apt-get install -y build-essential
fi

if [dpkg -s python-dev | grep 'install ok' -ne 'Status: install ok installed' ]; then
    python-dev
fi

if [dpkg -s python2.7-dev | grep 'install ok' -ne 'Status: install ok installed' ]; then
    python2.7-dev
fi



# Install python pip
curl https://bitbucket.org/pypa/setuptools/raw/bootstrap/ez_setup.py | python -
curl https://raw.github.com/pypa/pip/master/contrib/get-pip.py | python -
export PATH="/usr/local/bin:$PATH"

# Install the project python requirements
pip install -r requirements.txt
