<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php url_base(); ?>public/css/toolkit-inverse.min.css">
    <link rel="stylesheet" href="<?php url_base(); ?>public/css/application.css">
    <title>KYF LTDA</title>
</head>
<body>
<div class="with-iconav">
    <nav class="iconav">
        <a class="iconav-brand" href="#">
            <span class="icon icon-shield iconav-brand-icon"></span>
        </a>
        <div class="iconav-slider">
            <ul class="nav nav-pills iconav-nav flex-md-column">
                <!-- ##################################################################################### -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=Persona&action=index" title="Personas" data-toggle="tooltip" data-placement="right" data-container="body">
                        <span class="icon icon-user"></span>
                        <small class="iconav-nav-label d-md-none">Personas</small>
                    </a>
                </li>
                <!-- ##################################################################################### -->
               <!-- <li class="nav-item">
                    <a class="nav-link" href="#" title="Dependencias KYF" data-toggle="tooltip" data-placement="right" data-container="body">
                        <span class="icon icon-location-pin"></span>
                        <small class="iconav-nav-label d-md-none">Sedes</small>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=Turno&action=index" title="Turnos" data-toggle="tooltip" data-placement="right" data-container="body">
                        <span class="icon icon-clock"></span>
                        <small class="iconav-nav-label d-md-none">Turnos</small>
                    </a>
                </li>
                <!-- ##################################################################################### -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=Empresa&action=index" title="Empresas" data-toggle="tooltip" data-placement="right" data-container="body">
                        <span class="icon icon-briefcase"></span>
                        <small class="iconav-nav-label d-md-none">Empresas</small>
                    </a>
                </li>
                <!-- ##################################################################################### -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=Sede&action=index" title="Sedes" data-toggle="tooltip" data-placement="right" data-container="body">
                        <span class="icon icon-users"></span>
                        <small class="iconav-nav-label d-md-none">Sedes</small>
                    </a>
                </li>
                <!-- ##################################################################################### -->
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" title="Certificados" data-toggle="tooltip" data-placement="right" data-container="body">
                        <span class="icon icon-news"></span>
                        <small class="iconav-nav-label d-md-none">Certificados</small>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" title="Informes" data-toggle="tooltip" data-placement="right" data-container="body">
                        <span class="icon icon-clipboard"></span>
                        <small class="iconav-nav-label d-md-none">Informes</small>
                    </a>
                </li>
        </div>
    </nav>
