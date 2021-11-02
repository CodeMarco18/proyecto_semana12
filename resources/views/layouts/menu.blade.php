
<li class="nav-item">
    <a href="{{ route('vueusuario.index') }}"
       class="nav-link {{ Request::is('vueusuario*') ? 'active' : '' }}">
        <p>Vue Usuario</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuepaciente.index') }}"
       class="nav-link {{ Request::is('vuepaciente*') ? 'active' : '' }}">
        <p>Vue Paciente</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuecita.index') }}"
       class="nav-link {{ Request::is('vuecita*') ? 'active' : '' }}">
        <p>Vue Cita</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuedetalle.index') }}"
       class="nav-link {{ Request::is('vuedetalle*') ? 'active' : '' }}">
        <p>Vue Cita Detalle</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('vuedoctor.index') }}"
       class="nav-link {{ Request::is('vuedoctor*') ? 'active' : '' }}">
        <p>Vue Doctor</p>
    </a>
</li>

