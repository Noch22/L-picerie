
function showcard(eventIndex) {
    var descriptionClass = 'description-' + eventIndex;
    var card = document.querySelector('.' + descriptionClass);
    //card.classList.toggle('active');
    card.classList.toggle('open');
}

document.querySelectorAll('button.desktop.show_btn').forEach((buttonElement) => {
    const id = buttonElement.dataset.id;
    buttonElement.addEventListener('click', () => {
        showcard(id);
        buttonElement.classList.toggle('rotate');
    })
    
}) 


//MOBILE RDV CARD TOGGLE

function showcardMobile(eventIndex) {
    var descriptionClass = 'description-' + eventIndex;
    var card = document.querySelector('.mobile.grid.wrapper' + '.' + descriptionClass);
    //card.classList.toggle('active');
    card.classList.toggle('open');
}

document.querySelectorAll('button.mobile.show_btn').forEach((buttonElement) => {
    const id = buttonElement.dataset.id;
    buttonElement.addEventListener('click', () => {
        showcardMobile(id);
        buttonElement.classList.toggle('rotate');
    })
    
}) 

var body = document.body;

if(document.querySelector('.sidebar') !== null){
function showslider(eventIndex) {
    var sidebar_class = 'sidebar-' + eventIndex;
    var card = document.querySelector('.' + sidebar_class);
    card.classList.toggle('active');
    body.classList.toggle('sidebar-active');
}

document.querySelectorAll('button.show_slider').forEach((buttonElement) => {
    const id = buttonElement.dataset.id;
    buttonElement.addEventListener('click', () => {
        showslider(id);
    })
    
}) 

document.addEventListener('mousedown', function(event) {
    var sidebars = document.querySelectorAll('.sidebar');

    // Vérifier si le clic est à l'intérieur de l'un des sidebars et que le sidebar est actif
    var isInsideSidebar = Array.from(sidebars).some(function(sidebar) {
        return sidebar.contains(event.target) && sidebar.classList.contains('active');
    });

    // Si le clic n'est pas à l'intérieur d'un sidebar actif, retirer la classe active
    if (!isInsideSidebar) {
        sidebars.forEach(function(sidebar) {
            if (sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                body.classList.remove('sidebar-active');
            }
        });
    }
});

// Empêcher la propagation du clic à l'intérieur du sidebar pour éviter la fermeture immédiate
document.querySelector('.sidebar').addEventListener('mousedown', function(event) {
    event.stopPropagation();
});
}


if(document.querySelector('.sidebar-artists') !== null){
    function showsliderArtists(eventIndex) {
        var sidebar_class = 'sidebar-' + eventIndex;
        var card = document.querySelector('.' + sidebar_class);
        card.classList.toggle('active');
        body.classList.toggle('sidebar-active');
    }
    
    document.querySelectorAll('button.show_slider').forEach((buttonElement) => {
        const id = buttonElement.dataset.id;
        buttonElement.addEventListener('click', () => {
            showsliderArtists(id);
        })
        
    }) 
    
    document.addEventListener('mousedown', function(event) {
        var sidebars = document.querySelectorAll('.sidebar-artists');
    
        // Vérifier si le clic est à l'intérieur de l'un des sidebars et que le sidebar est actif
        var isInsideSidebar = Array.from(sidebars).some(function(sidebar) {
            return sidebar.contains(event.target) && sidebar.classList.contains('active');
        });
    
        // Si le clic n'est pas à l'intérieur d'un sidebar actif, retirer la classe active
        if (!isInsideSidebar) {
            sidebars.forEach(function(sidebar) {
                if (sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                    body.classList.remove('sidebar-active');
                }
            });
        }
    });
    
    // Empêcher la propagation du clic à l'intérieur du sidebar pour éviter la fermeture immédiate
    document.querySelector('.sidebar-artists').addEventListener('mousedown', function(event) {
        event.stopPropagation();
    });
    }


if(document.querySelector('.sidebar-header') !== null){
        function showsliderHeader() {
            var sidebarheader = document.querySelector('.sidebar-header');
            sidebarheader.classList.toggle('active');
            body.classList.toggle('sidebar-active');
        }
        
        document.querySelector('.infos-pratiques').addEventListener('click', () => {
            showsliderHeader();
            })
        
            document.querySelector('.menu_mobile .infos-pratiques').addEventListener('click', () => {
                window.location.href = '/infos-pratiques/';
            })

        document.querySelector('.header_show_slider').addEventListener('click', () => {
            showsliderHeader();
            })
            
            if(document.querySelector('.desktop_layout .toggle_sponsors') !== null){
            document.querySelector('.desktop_layout .toggle_sponsors').addEventListener('click', () => {
            showsliderHeader();
            })
            }

            if(document.querySelector('.mobile_layout .toggle_sponsors') !== null){
                document.querySelector('.mobile_layout .toggle_sponsors').addEventListener('click', () => {
                        window.location.href = '/infos-pratiques';
                    })
                    }
        
        document.addEventListener('mousedown', function(event) {
            var sidebars = document.querySelectorAll('.sidebar-header');
        
            // Vérifier si le clic est à l'intérieur de l'un des sidebars et que le sidebar est actif
            var isInsideSidebar = Array.from(sidebars).some(function(sidebar) {
                return sidebar.contains(event.target) && sidebar.classList.contains('active');
            });
        
            // Si le clic n'est pas à l'intérieur d'un sidebar actif, retirer la classe active
            if (!isInsideSidebar) {
                sidebars.forEach(function(sidebar) {
                    if (sidebar.classList.contains('active')) {
                        sidebar.classList.remove('active');
                        body.classList.remove('sidebar-active');
                    }
                });
            }
        });
        
        // Empêcher la propagation du clic à l'intérieur du sidebar pour éviter la fermeture immédiate
        document.querySelector('.sidebar-header').addEventListener('mousedown', function(event) {
            event.stopPropagation();
        });
        }