#!/bin/bash
rm -rf ~/src;
LINK="https://go.dev/dl/go1.21.3.linux-amd64.tar.gz";
goVer="go1.21.3.linux-amd64.tar.gz";
mkdir ~/src && cd ~/src;
sudo apt update && sudo apt upgrade -y  && sudo apt install curl git build-essential -y;
curl -L -o $goVer $LINK;
sudo tar -C /usr/local -xzf "$goVer";
export PATH=$PATH:/usr/local/go/bin && echo "export PATH=$PATH:/usr/local/go/bin" >> ~/.bashrc && source ~/.bashrc && go version && rm -rf "$goVer"

#cd ~
#git clone https://github.com/inconshreveable/ngrok.git
#cd ~/ngrok
#go mod init ng
#go mod tidy
#echo $GO111MODULE
#export GO111MODULE=on
#echo $GO111MODULE
#go clean