console.log('ShowCard loaded');

function showcard(eventIndex) {
    var descriptionClass = 'description-' + eventIndex;
    var card = document.querySelector('.' + descriptionClass);
    //card.classList.toggle('active');
    card.classList.toggle('open');
}

document.querySelectorAll('button.show_btn').forEach((buttonElement) => {
    const id = buttonElement.dataset.id;
    console.log(buttonElement);
    buttonElement.addEventListener('click', () => {
        showcard(id);
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
    console.log(event);

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


console.log(document.querySelectorAll('button.show_btn'))
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
        console.log(event);
    
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
    
    
    console.log(document.querySelectorAll('.child_artiste'))
    }