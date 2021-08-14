from django.shortcuts import render

from rest_framework import viewsets

from django.contrib.auth.models import User
from managementadmin.models import *
from managementadmin.serializers import *



# ViewSets define the view behavior.
class VehicleViewSet(viewsets.ModelViewSet):
    queryset = Vehicle.objects.all()
    serializer_class = VehicleSerializer

class DriverViewSet(viewsets.ModelViewSet):
    queryset = Driver.objects.all()
    serializer_class = DriverSerializer

class StorageLocationViewSet(viewsets.ModelViewSet):
    queryset = StorageLocation.objects.all()
    serializer_class = StorageLocationSerializer