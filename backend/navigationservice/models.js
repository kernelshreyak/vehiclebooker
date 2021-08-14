const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost:27017/vehiclebooker', {useNewUrlParser: true, useUnifiedTopology: true});

const VehicleRouteSchema = mongoose.Schema({
    vehicle_id:Number,
    route_points:Object
});
const VehicleLocationSchema = mongoose.Schema({
    vehicle_id:Number,
    lat:Number,
    lng:Number,
    timestamp: { type: Date, default: Date.now},
});

const VehicleRoute = mongoose.model('VehicleRoute',VehicleRouteSchema);
const VehicleLocation = mongoose.model('VehicleLocation',VehicleLocationSchema);

exports.VehicleRoute = VehicleRoute
exports.VehicleLocation = VehicleLocation


