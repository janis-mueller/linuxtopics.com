@extends('layout')
@section('content')


    <html lang="de, en">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome file</title>
        <link rel="stylesheet" href="https://stackedit.io/style.css" />
    </head>

    <body class="stackedit">
    <div class="stackedit__html"><h1 id="installing-openssh-server-on-ubuntu-18.04">Installing OpenSSH-Server on Ubuntu 18.04</h1>
        <p>Hi! In this tutorial we are going to install an OpenSSH (Secure Shell) Server on Ubuntu 18 and make sure the services are running correctly in the background and is accepting incoming connections to our server.</p>
        <h2 id="update-all-software">1. Update all software</h2>
        <p>The first important step will be to update the software on our machine so that we make sure we are installing the latest version of openSSH and also ensure all the latest security updates are being installed.<br>
            To update, enter the following into your terminal:<br>
            <code>sudo apt update</code><br>
            <img src="/images/ubuntu-18-ssh-server installieren/apt-update.png" alt="" width="500" height="400">
            <br>
            <br>
            To upgrade available packages enter then:<br>
            <code>sudo apt upgrade</code></p>
        <img src="/images/ubuntu-18-ssh-server installieren/apt-upgrade.png" alt="" width="500" height="400">
        <br>
        <br>
        <p>Don’t worry, the upgrading process could take a while. After it is finished, all the software on our machine should be up to date!</p>
        <h2 id="install-the-openssh-server-software-package">2. Install the openSSH-Server software package</h2>
        <p>The next step will be to install the SSH-Server we want from the package list. Do do this we type into our terminal:<br>
            <code>sudo apt install openssh-server</code><br>
            On the prompt that will be asking us if we really want to install this software, we confirm our action by typing a “y”.<br>
            That’s it. SSH-Server should now be installed and running on our Ubuntu-Installation.</p>
        <h2 id="verify-that-the-ssh-service-is-active-and-running">3. Verify that the SSH-Service is active and running</h2>
        <p>We need to make sure that our Server is running and accepting connections to our machine.<br>
            To do this we type:<br>
            <code>sudo systemctl status sshd</code><br>
            <strong>systemct</strong> is a control software for services that on our Ubuntu machine<br>
            <strong>status</strong> checks the status of a given service name<br>
            <strong>sshd</strong> is the service name of the SSH-Server we installed in the previous step.<br>
            The Output should look similar to this one:</p>
        <p>That’s it, we successfully installed an SSH-Server on our machine to be able to control it remotely!</p>
    </div>
    </body>

    </html>




@endsection
