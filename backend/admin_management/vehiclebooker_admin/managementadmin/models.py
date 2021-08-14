from django.db import models
from django.db.models.base import Model
from django.contrib.auth.models import User
from django.db.models.deletion import CASCADE, SET_NULL



# Specifies where the vehicle is stored after it's usage is completed
class StorageLocation(models.Model):
    latitude = models.FloatField(default=0)
    longitude = models.FloatField(default=0)
    name = models.CharField(max_length=200,null=False)
    address_string = models.CharField(max_length=200,null=False)  


# Driver can drive vehicles. Driver has only single vehicle assigned to them at a given time
class Driver(models.Model):
    user = models.ForeignKey(to=User,null=False,on_delete=CASCADE)
    age = models.IntegerField(null=False)

    def __str__(self) -> str:
        return self.user.username


# Main class defining a vehicle in the system. This can be booked by users and driven by drivers
class Vehicle(models.Model):

    class VehicleTypes(models.IntegerChoices):
        CAR = 1
        TWOWHEELER = 2
        TRUCK = 3
        TRAIN = 4
        AEROPLANE = 5

    name = models.CharField(max_length=200,null=False)
    vnum = models.CharField(null=False,max_length=100,unique=True)
    vehicle_company = models.CharField(null=False,max_length=100,default="N/A")
    storagelocation = models.ForeignKey(to=StorageLocation,null=True,on_delete=SET_NULL)
    price = models.FloatField(default=0)
    type = models.IntegerField(choices=VehicleTypes.choices,default=VehicleTypes.CAR)

    def __str__(self) -> str:
        return self.name

    def total_allotments():
        return 2

class VehicleAllotment(models.Model):
    driver = models.ForeignKey(to=Driver,null=False,on_delete=CASCADE)
    vehicle = models.ForeignKey(to=Vehicle,null=False,on_delete=CASCADE)
    createdAt = models.DateTimeField(auto_now=True, null=True)