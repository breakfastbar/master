<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= URL ?>dashboard">
            <!--img src="<?= URL ?>public/img/logo-bar.jpg" alt="" width="35" height="35"/-->
        </a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> Mensagens
                            <span class="pull-right text-muted small">-----</span>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuração</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?= URL ?>dashboard/logout"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
        <li>
            
                <li><a href="#"><i class="fa fa-question-circle fa-fw"></i> Ajuda</a></li>
                
        </li>
    </ul>

    <div class="navbar-default sidebar " role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li><a href="<?= URL ?>dashboard"><i class="fa fa-home fa-fw"></i> Inicio</a></li>
                <li><a href="<?= URL ?>caixa"><i class="fa fa-calculator fa-fw"></i> Caixa</a></li>
                <li>
                   <a href="#"><i class="fa fa-cutlery fa-fw"></i> Cozinha <span class="fa arrow"></span></a> 
                   <ul class="nav nav-second-level">
                        <li><a href="<?= URL ?>verpedidos"><i class="fa fa-eye fa-fw"></i> Ver Pedidos</a></li>
                        <li><a href="<?= URL ?>despensa"><i class="fa fa-bars"></i> Despensa</a></li>                       
                   </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cogs fa-fw"></i> Gerenciar<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?= URL ?>usuario"><i class="fa fa-users fa-fw"></i> Usuário</a></li>
                        <li><a href="<?= URL ?>produto"><i class="fa fa-book fa-fw"></i> Catálogo</a></li>
                        <li><a href="<?= URL ?>mesa"><i class="glyphicon glyphicon-blackboard fa-fw"></i> Mesa</a></li>
                        <li><a href="<?= URL ?>categoria"><i class="fa fa-tags fa-fw"></i> Categorias de produto</a></li>
                        <li><a href="<?= URL ?>setor"><i class="fa fa-cubes fa-fw"></i> Setor de atendimento</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div>
</nav>