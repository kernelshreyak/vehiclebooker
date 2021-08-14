from rest_framework import routers, serializers, viewsets

from django.contrib.auth.models import User
from managementadmin.models import *

# Serializers define the API representation.
class VehicleSerializer(serializers.ModelSerializer):
    class Meta:
        model = Vehicle
        fields = ['name','vnum','price','type']


class DriverSerializer(serializers.ModelSerializer):
    driver_username = serializers.ReadOnlyField(source='user.username')

    class Meta:
        model = Driver
        fields = ["driver_username","age"]

class StorageLocationSerializer(serializers.ModelSerializer):
    class Meta:
        model = StorageLocation
        fields = ['name','address_string','latitude','longitude']