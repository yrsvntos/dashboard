<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Projecto_Dashboard
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
<div class="sidebar d-flex flex-column p-3">
        
        <div id="menu">
            <ul class="nav nav-pills flex-column">
                <li><a href="#" class="nav-link bg-active"><i class="fas fa-chart-pie me-2"></i>Dashboard Geral</a></li>
                <li><a href="#" class="nav-link cinzento"><i class="fas fa-chart-line me-2 "></i>Análise Detalhada</a></li>
                <li><a href="#" class="nav-link cinzento"><i class="fas fa-users me-2"></i>Comparação de equipas</a></li>
                <li><a href="#" class="nav-link cinzento"><i class="fas fa-question me-2"></i>Metas & Objectivos</a></li>
            </ul>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <h5 class="fs-6 fw-bold cinzento">Filtros Rápidos</h5>
                <div class="mb-3">
                    <label for="equipa" class="form-label font-label cinzento mb-2">Equipa</label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected>Todas as equipas</option>
                        <option value="1">Equipa 1</option>
                        <option value="2">Equipa 2</option>
                        <option value="3">Equipa 3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="equipa" class="form-label font-label cinzento mb-2">Produtos</label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected>Todos os produtos</option>
                        <option value="1">Produto 1</option>
                        <option value="2">Produto 2</option>
                        <option value="3">Produto 3</option>
                    </select>
                </div>
                <div class="">
                    <label for="equipa" class="form-label font-label cinzento mb-2">Região</label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected>Todas regiões</option>
                        <option value="1">Região 1</option>
                        <option value="2">Região 2</option>
                        <option value="3">Região 3</option>
                    </select>
                </div>
                
                
                
                
            </ul>
        </div>
        
    </div>
</aside><!-- #secondary -->
<?php
