<!DOCTYPE html>
<html>
<head>
    <title>Grup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Nom Grup</h1>
        
        <!-- Pestañas -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="alumnos-tab" data-bs-toggle="tab" data-bs-target="#alumnos" type="button" role="tab" aria-controls="alumnos" aria-selected="true">Alumnos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="disponibles-tab" data-bs-toggle="tab" data-bs-target="#disponibles" type="button" role="tab" aria-controls="disponibles" aria-selected="false">Disponibles</button>
            </li>
        </ul>
        
        <!-- Contenido de las pestañas -->
        <div class="tab-content" id="myTabContent">
            <!-- Pestaña de Alumnos -->
            <div class="tab-pane fade show active" id="alumnos" role="tabpanel" aria-labelledby="alumnos-tab">
                <h3>Alumnos del grup</h3>
                <!-- Aquí puedes mostrar la lista de alumnos del grupo -->
                
            </div>
            
            <!-- Pestaña de Disponibles -->
            <div class="tab-pane fade" id="disponibles" role="tabpanel" aria-labelledby="disponibles-tab">
                <h3>Alumnes disponibles</h3>
                <!-- Aquí puedes mostrar la lista de alumnos disponibles para añadir -->
                <button class="btn btn-primary">Afegir</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

