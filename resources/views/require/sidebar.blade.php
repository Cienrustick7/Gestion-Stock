<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav bg-gradient-primary" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>MENU</span>
        </a>
      </li><!-- End client Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Client</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('client.index')}}">
              <i class="bi bi-circle"></i><span>Liste Client</span>
            </a>
          </li>
          <li>
            <a href="{{route('client.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Client</span>
            </a>
          </li>

        </ul>
      </li><!-- End fournisseur Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Gestion Fournisseur</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('fournisseur.index') }}">
              <i class="bi bi-circle"></i><span>Liste Fournisseur</span>
            </a>
          </li>
          <li>
            <a href="{{ route('fournisseur.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter Fournisseur</span>
            </a>
          </li>

        </ul>
      </li><!-- End produit Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Gestion Produit</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('produit.index')}}">
              <i class="bi bi-circle"></i><span>Liste Produit</span>
            </a>
          </li>
          <li>
            <a href="{{route('produit.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter produit</span>
            </a>
          </li>
        </ul>
      </li><!-- End entre Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Entre</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('entre.index')}}">
              <i class="bi bi-circle"></i><span>Liste d'entré</span>
            </a>
          </li>
          <li>
            <a href="{{route('entre.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter entré</span>
            </a>
          </li>

        </ul>
    </li><!-- End sortie Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nave" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Sortie</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('sortie.index')}}">
              <i class="bi bi-circle"></i><span>Liste Sortie</span>
            </a>
          </li>
          <li>
            <a href="{{route('sortie.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Sortie</span>
            </a>
          </li>
          <li>
          </li>
        </ul>
      </li><!-- End Icons Nave -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Societe</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('societe.index') }}">
              <i class="bi bi-circle"></i><span>Liste Societe</span>
            </a>
          </li>
          <li>
            <a href="{{route('societe.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Societe</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_1 -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Facture</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('facture.index') }}">
              <i class="bi bi-circle"></i><span>Liste Facture</span>
            </a>
          </li>
          <li>
            <a href="{{route('facture.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Facture</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_1 -->





  </aside>
