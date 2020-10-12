@extends('layout')
@section('content')
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >


    <div class ="container">
    <blockquote class="blockquote text-center">
    <h3 class="posttitle">Linux-Server</h3>
    </blockquote>
    <br>
    <br>

    <div class="card flex-row flex-wrap">
        <div class="card-header border-0">
            <img src="/images/linuxbabe.png" alt="" width="260" height="200">
        </div>
        <div class="card-block px-2">
            <h4 class="card-title">Install and configure OpenSSH-Server in Ubuntu 18.04 Xenial Xerus</h4>
            <p class="card-text">In this tutorial we are going to set up an OpenSSH-Server via the terminal, enable it and establish a connection</p>
            <a href="ssh-server-installation-unter-ubuntu-18-04" class="btn btn-secondary">Read More</a>
        </div>
    </div>
        <br>
        <br>

        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="/images/install-ubuntu.png" alt="" width="292" height="200">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title">How to install Ubuntu 18.04 in a VMware Virtual-Machine</h4>
                <p class="card-text">Here I will show you how to install a Ubuntu virtual machine in VMWare Worksation Player</p>
                <a href="#" class="btn btn-secondary">Read More</a>
            </div>

        </div>



@endsection
