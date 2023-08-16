// Crear Base de datos "PizzaStore"
USE PizzaStore;
// Crear colección "categoriasPizza"
db.createCollection("categoriasPizza");
// Cargar documentos en "categoriasPizza"
db.categoriasPizza.insertMany(
  [{
    "_id": {
      "$oid": "648a3acb80f687c89a36fff7"
    },
    "nombre": "categoria1"
  },
  {
    "_id": {
      "$oid": "648a4cab80f687c89a370026"
    },
    "nombre": "categoria2"
  }]);

// Crear coleccion "clientes"
db.createCollection("clientes");

//Cargar documentos en "clientes"
db.clientes.insertMany(
  [{
    "_id": {
      "$oid": "648a3f2580f687c89a36fffe"
    },
    "nombre": "Nombre1",
    "apellido": "Apellido1",
    "direccion": "DireccionCompleta1",
    "CP": "00001",
    "ciudad": "Ciudad1",
    "provincia": "Provincia1",
    "telefono": 666333999
  },
  {
    "_id": {
      "$oid": "648a4e6f80f687c89a37002f"
    },
    "nombre": "Nombre2",
    "apellido": "Apellido2",
    "direccion": "DireccionCompleta2",
    "CP": "00002",
    "ciudad": "Ciudad2",
    "provincia": "Provincia2",
    "telefono": 666333111
  }]);

//Crear colección "comandas"
db.createCollection("comandas");

//Cargar datos en "comandas"
db.comandas.insertMany(
  [{
    "_id": {
      "$oid": "648a3a599ac934ade78891f4"
    },
    "fechaYHora": "2020-01-23T08:23:00",
    "productos": [
      {
        "producto0": {
          "$oid": "648a4d4080f687c89a370028"
        }
      },
      {
        "producto1": {
          "$oid": "648a3c9480f687c89a36fff9"
        }
      }
    ],
    "_idRepartidor": {
      "$oid": "648a40fb80f687c89a370002"
    },
    "fechaYhoraEntrega": "2021-12-23T09:23:00",
    "_idCliente": {
      "$oid": "648a3f2580f687c89a36fffe"
    }
  },
  {
    "_id": {
      "$oid": "648a4e9e80f687c89a370031"
    },
    "fechaYHora": "2022-01-23T08:23:00",
    "productos": [
      {
        "producto0": {
          "$oid": "648a4d4080f687c89a370028"
        }
      },
      {
        "producto1": {
          "$oid": "648a3c9480f687c89a36fff9"
        }
      },
      {
        "producto2": {
          "$oid": "648a3c9480f687c89a36fff9"
        }
      }
    ],
    "_idRepartidor": {
      "$oid": "648a40fb80f687c89a370002"
    },
    "fechaYhoraEntrega": "2022-12-23T09:23:00",
    "_idCliente": {
      "$oid": "648a4e6f80f687c89a37002f"
    }
  }]);

  //Crear colección "empleados"
db.createCollection("empleados");

//Cargar datos en "empleados"
db.empleados.insertMany(
  [{
    "_id": {
      "$oid": "648a40fb80f687c89a370002"
    },
    "sucursal": {
      "$oid": "648a402880f687c89a370000"
    },
    "nombreEmpleado": "NombreEmpleado1",
    "apellidoEmpleado": "ApellidoEmpleado1",
    "NIFEmp": "P9876543R",
    "TelEmp": 444333222,
    "cargo": "repartidor"
  },
  {
    "_id": {
      "$oid": "648a541480f687c89a37003d"
    },
    "sucursal": {
      "$oid": "648a402880f687c89a370000"
    },
    "nombreEmpleado": "NombreEmpleado2",
    "apellidoEmpleado": "ApellidoEmpleado2",
    "NIFEmp": "J9876534R",
    "TelEmp": 444333333,
    "cargo": "cocinero"
  }]);

  //Crear colección "productos"
db.createCollection("productos");

//Cargar datos en "productos"
db.productos.insertMany(
  [{
    "_id": {
      "$oid": "648a3c9480f687c89a36fff9"
    },
    "nombre": "Producto1",
    "tipo": "Pizza",
    "descripcion": "Descripcion1",
    "imagen": "URL1",
    "precio": 1.5,
    "categoriaPizza": {
      "$oid": "648a3acb80f687c89a36fff7"
    }
  },
  {
    "_id": {
      "$oid": "648a4c9b80f687c89a370024"
    },
    "nombre": "Producto2",
    "tipo": "Pizza",
    "descripcion": "Descripcion2",
    "imagen": "URL2",
    "precio": 2.5,
    "categoriaPizza": {
      "$oid": "648a4cab80f687c89a370026"
    }
  },
  {
    "_id": {
      "$oid": "648a4d4080f687c89a370028"
    },
    "nombre": "Producto3",
    "tipo": "bebida",
    "descripcion": "Descripcion3",
    "imagen": "URL3",
    "precio": 3.5
  }]);
  
//Crear colección "sucursales"
db.createCollection("sucursales");

//Cargar datos en "sucursales"
db.sucursales.insertMany(
  [{
    "_id": {
      "$oid": "648a402880f687c89a370000"
    },
    "direccionSucursal": "DireccionCompletaS1",
    "CP": "10001",
    "ciudad": "CiudadS1",
    "provincia": "ProvinciaS1"
  }]);