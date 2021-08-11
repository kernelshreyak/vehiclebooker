// Main navigation web service for Vehicle Booker 
// Currently stores routing data and locations of vehicles
// Admin management service queries data from this web service



var express = require('express')
var cors = require('cors')
const bodyParser = require('body-parser')

var {VehicleRoute,VehicleLocation} = require("./models");

var app = express()

app.use(cors())
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.json());




// Main routes (refactor later to separate module [TODO])
app.post("/api/updatelocation",async (req,res) => {
    const newlocation = req.body.newlocation;
    if(newlocation){
        // console.log("new location: ",newlocation)
        const location = new VehicleLocation;
        location.lat = newlocation[0];
        location.lng = newlocation[1];
        location.vehicle_id = req.body.vehicle_id

        await location.save();

        res.json({status:true,nessage:"location updated successfully"})
    }
    else{
        res.status(400).json({status:false,message:"invalid location input"})
    }
})


app.listen(3000,() => {
    console.log("Vehicle Booker Navigation webservice PORT:3000")
});
