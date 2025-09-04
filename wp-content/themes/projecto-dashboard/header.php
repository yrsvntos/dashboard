<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Projecto_Dashboard
 */

?>


<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Básico -->
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Nome da Empresa ou Autor">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url( home_url() ); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.jpg">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/twitter-image.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts - Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <title>Teste - Yanik dos Santos</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <main class="w-100">
        <nav class="nav-bar py-2">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="nav-brands">
                <div class="d-flex nav-brand">
                    <div class="icon">
                        <i class="fas fa-chart-line me-2 bg-azul p-2 rounded"></i>
                    </div>
                    <div class="brand-name">
                        <a class="navbar-brand fw-bold" href="#">Análise de Performance</a>
                        <p class="cinzento">CRM Dashboard</p>
                    </div>
                </div>
                <div class="col-4 invisible-desktop text-right">
                    <button id="botaoMenu" class="btn btn-primary">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="nav-right d-flex gap-3 align-items-center">
                <div class="nav-select">
                    <div class="position-relative" style="max-width: 220px;">
                        <select class="form-select form-select-sm ps-25 bg-select-nav">
                            <option value="30">Últimos 30 dias</option>
                            <option value="7">Últimos 7 dias</option>
                            <option value="90">Últimos 90 dias</option>
                        </select>
                        <i class="fas fa-calendar position-absolute" 
                            style="top: 50%; left: 10px; transform: translateY(-50%); color: #495057;"></i>
                    </div>
                </div>
                <div class="nav-btn">
                    <button class="btn btn-sm btn-primary"><i class="fas fa-download me-2"></i>Exportar</button>
                </div>
                <div class="nav-settings d-flex gap-3 cinzento">
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-wrench"></i>
                </div>
                <div class="nav-userProfile">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/img/user-1.jpg" 
                        alt="User Img"
                        class="avatar-sm" 
                    >
                </div>
            </div>
        </div>
        </nav>
<body>

    