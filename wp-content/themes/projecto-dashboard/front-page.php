<?php
    /* 
        Template Name: Dashboard 
    */
    get_header(); 

?>


    <div class="d-flex flex-col">
        <?php get_sidebar();?>
        <div class="w-100 bg-main p-4">
        <section id="kpi">
        <div class="row mb-2 align-items-stretch">
            <!-- Total de Vendas -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm bg-white border rounded">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                    <h6 class="card-title mb-1 cinzento fw-light fs-6">Total de Vendas</h6>
                    <p class="card-text fs-4 fw-bold my-3">€142.8K</p>
                    <p class="fw-light cinzento fs-6">
                        <span class="text-success fw-bold"><i class="fas fa-arrow-up me-2"></i>+12.5%</span> vs mês anterior
                    </p>
                    </div>
                    <div class="bg-success bg-opacity-25 p-3 rounded">
                    <i class="fas fa-euro-sign text-success fs-5"></i>
                    </div>
                    
                    
                </div>
                </div>
                
            </div>
            <div class="col-md-3 mb-3 ">
                <div class="card shadow-sm bg-white border rounded h-100">
                    <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="card-title mb-1 cinzento fw-light fs-6">Taxa de Conversão</h6>
                        <p class="card-text fs-4 fw-bold my-3">24.8%</p>
                        <p class="fw-light cinzento fs-6">
                        <span class="text-success fw-bold"><i class="fas fa-arrow-up me-2"></i>+3.2%</span> vs mês anterior
                        </p>
                    </div>
                    <div class="bg-primary bg-opacity-25 p-3 rounded">
                        <i class="fas fa-percent text-primary fs-5"></i>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100 shadow-sm bg-white border rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="card-title mb-1 cinzento fw-light fs-6">Ticket Médio</h6>
                        <p class="card-text fs-4 fw-bold my-3">€2.847</p>
                        <p class="fw-light cinzento fs-6">
                        <span class="text-danger fw-bold"><i class="fas fa-arrow-down me-2"></i>-2.1%</span> vs mês anterior
                        </p>
                    </div>
                    <div class="bg-warning bg-opacity-25 p-3 rounded">
                        <i class="fas fa-ticket text-warning fs-5"></i>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100 shadow-sm bg-white border rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="card-title mb-1 cinzento fw-light fs-6">Meta Mensal</h6>
                        <p class="card-text fs-4 fw-bold my-3">85.2%</p>
                        <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 85.2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class=" p-3 rounded" style="background-color: rgba(200, 162, 200, 0.25);">
                        <i class="fas fa-question fs-5" style="color: rgb(200, 162, 200);"></i>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section id="kpi-2">
        <div class="row mb-3 align-items-stretch">
            <div class="col-md-6 mb-2">
                <div div class="card shadow-sm bg-white border rounded">
                    
                    <div class="card-body table-responsive">
                    <h6 class="fw-bold">Perfomance por Região</h6>  
                    <table class="table table-bordered text-center align-middle mt-4">
                        <thead>

                        </thead>
                        <tbody>
                        <tr>
                            <td>Q4</td>
                            <td class="opacity-mid-1">55</td>
                            <td class="opacity-mid">45</td>
                            <td class="opacity-full">70</td>
                            <td class="opacity-mid-2">32</td>
                        </tr>
                        <tr>
                            <td>Q3</td>
                            <td class="opacity-mid-1">48</td>
                            <td class="opacity-mid">40</td>
                            <td class="opacity-full">58</td>
                            <td class="opacity-mid-2">30</td>
                        </tr>
                        <tr>
                            <td>Q2</td>
                            <td class="opacity-mid-1">52</td>
                            <td class="opacity-mid">42</td>
                            <td class="opacity-full">65</td>
                            <td class="opacity-mid-2">28</td>
                        </tr>
                        <tr>
                            <td>Q1</td>
                            <td class="opacity-mid-1">45</td>
                            <td class="opacity-mid">38</td>
                            <td class="opacity-full">60</td>
                            <td class="opacity-mid-2">25</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Norte</td>
                            <td>Centro</td>
                            <td>Sul</td>
                            <td>Ilhas</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="progress">
                        <div class="progress-bar bg-primary opacity-25" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">0</div>
                        <div class="progress-bar bg-primary opacity-50" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">25</div>
                        <div class="progress-bar bg-primary opacity-75" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">50</div>
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">75</div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div div class="card shadow-sm bg-white border rounded h-100">
                <div class="card-body d-flex flex-column">
                    <h6 class="fw-bold">Ranking dos Vendedores</h6>
                    <div class="vendedores mt-4">
                        <div class="vendedor d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="posicao bg-gold ranking-circle">
                                1
                            </div>
                            <div class="perfil d-flex align-items-center gap-3">
                                <img 
                                src="<?php echo get_template_directory_uri(); ?>/img/user-1.jpg" 
                                alt="img do user"
                                class="avatar-sm"
                                >
                                João Silva
                            </div>
                        </div>
                        
                            <div class="valor-obtido">
                            <span class="fw-bold">€45.2K</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar " style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        <div class="vendedor d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="posicao bg-silver ranking-circle">
                                2
                            </div>
                            <div class="perfil d-flex align-items-center gap-3">
                                <img 
                                src="<?php echo get_template_directory_uri(); ?>/img/user-2.jpg" 
                                alt="img do user"
                                class="avatar-sm"
                                >
                                Maria Santos
                            </div>
                        </div>
                        
                            <div class="valor-obtido">
                            <span class="fw-bold">€38.7K</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar " style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        <div class="vendedor d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="posicao bg-bronze ranking-circle">
                                3
                            </div>
                            <div class="perfil d-flex align-items-center gap-3">
                                <img 
                                src="<?php echo get_template_directory_uri(); ?>/img/user-4.jpg" 
                                alt="img do user"
                                class="avatar-sm"
                                >
                                Pedro Costa
                            </div>
                        </div>
                        
                            <div class="valor-obtido">
                            <span class="fw-bold">€32.1K</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar " style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>  
        </div>
        </section>
        <section id="kpi-3">
        <div class="data-table mb-2">
            <div class="card shadow-sm border rounded p-3 mb-4">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h6 class="card-title fw-bold">Análise Detalhadas de Vendas</h6>
                <div class="d-flex buttons gap-3">
                <button class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-filter me-2"></i>Filtros
                </button>
                <button class="btn btn-sm btn-primary"><i class="fas fa-download me-2"></i>Exportar</button>
                </div>
            </div>
            
            <div class="table-responsive">
                <table id="vendasTable" class="table  table-bordered ">
                <thead>
                    <tr>
                    <th>Vendedor</th>
                    <th>Equipa</th>
                    <th>Vendas</th>
                    <th>Meta</th>
                    <th>Conversão</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        $args = array( 'post_type' => 'vendedor', 'posts_per_page' => 100);
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();


                        $string = the_title('','',false);
                        if (strlen($string) > 75) {
                            $stringCut = substr($string, 0, 55);// change 15 top what ever text length you want to show.
                            $endPoint = strrpos($stringCut, ' ');
                            $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                            $string .= ' [...]';
                        }
                        $status = get_field('status'); // pega o valor do campo ACF
                        $classe = ''; // inicia vazio

                        if ($status === 'Acima da Meta') {
                            $classe = 'text-success bg-success bg-opacity-25';
                        } elseif ($status === 'Abaixo da Meta') {
                            $classe = 'text-danger bg-danger bg-opacity-25';
                        } else {
                            $classe = 'text-warning bg-warning bg-opacity-25'; // cor neutra p/ outros casos
                        }

                    
                    ?>
                    <tr>
                        <td class="d-flex align-items-center gap-2">
                            <img 
                            src="<?php echo get_the_post_thumbnail_url(); ?>" 
                            alt="img do user"
                            class="avatar-sm"
                            >
                            <?php echo the_field('nome'); ?>
                        </td>
                        <td><?php echo the_field('equipa'); ?></td>
                         <td class="fw-bold">€<?php echo the_field('vendas'); ?></td>
                        <td>€<?php echo the_field('meta'); ?></td>
                        <td><?php echo the_field('conversao'); ?>%</td>
                        <td>
                            <span class="<?php echo esc_attr($classe); ?> bg-opacity-25 rounded p-1 span-pequeno"><?php echo the_field('status'); ?></span>
                        </td>
                    </tr>
                    <?php

                      endwhile;

                    ?>
                </tbody>
                </table>
            </div>
            
            </div>
        </div>
        </section>
    </div>
</main>


