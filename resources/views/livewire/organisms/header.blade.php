<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <livewire:atoms.link 
            :attrs="[
                'class' => 'navbar-brand'   
            ]"
            text="Navbar" 
            href="/" 
        />
        <livewire:atoms.button
            :attrs="[
                'class' => 'navbar-toggler',
                'type' => 'button',
                'data-bs-toggle' => 'collapse',
                'data-bs-target' => '#navbarColor02',
                'aria-controls' => 'navbarColor02',
                'aria-expanded' => 'false',
                'aria-label' => 'Toggle navigation'
            ]"
            content="livewire.atoms.icon"
            :content_attrs="[
                'class' => 'navbar-toggler-icon',
                'role' => 'button'
            ]"
        />
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <livewire:atoms.link 
                        :attrs="[
                            'class' => 'navbar-brand'   
                        ]" 
                        text="Home" 
                        href="#" 
                    />
                </li>
                <li class="nav-item">
                    <livewire:atoms.link 
                        :attrs="[
                            'class' => 'navbar-brand'   
                        ]"
                        text="Feature"
                        href="#" 
                    />
                </li>
                <li class="nav-item">
                    <livewire:atoms.link 
                        :attrs="[
                            'class' => 'navbar-brand'   
                        ]"
                        text="Pricing"
                        href="#" 
                    />
                </li>
                <li class="nav-item">
                    <livewire:atoms.link 
                        :attrs="[
                            'class' => 'navbar-brand'   
                        ]"
                        text="About"
                        href="#" 
                    />
                </li>
                <li class="nav-item dropdown">
                    <livewire:atoms.link 
                        :attrs="[
                            'class' => 'nav-link dropdown-toggle',
                            'data-bs-toggle' => 'dropdown',
                            'role' => 'button',
                            'aria-haspopup' => 'true',
                            'aria-expanded' => 'false'
                        ]"
                        text="Dropdown" 
                        href="#" 
                    />
                    <div class="dropdown-menu">
                        <livewire:atoms.link 
                            :attrs="[
                                'class' => 'dropdown-item'   
                            ]"
                            text="Action"
                            href="#" 
                        />
                        <livewire:atoms.link 
                            :attrs="[
                                'class' => 'dropdown-item'   
                            ]"
                            text="Another action"
                            href="#" 
                        />
                        <livewire:atoms.link 
                            :attrs="[
                                'class' => 'dropdown-item'   
                            ]"
                            text="Something else here"
                            href="#" 
                        />
                        <div class="dropdown-divider"></div>
                        
                        <livewire:atoms.link 
                            :attrs="[
                                'class' => 'dropdown-item'   
                            ]"
                            text="Separated link"
                            href="#" 
                        />
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>