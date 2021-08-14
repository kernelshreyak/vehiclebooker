from django.contrib import admin
from managementadmin.models import *

# Register your models here.

#  Get lat long from https://www.latlong.net/convert-address-to-lat-long.html

class StorageLocationAdmin(admin.ModelAdmin):
    list_display = ['name','address_string'] 
    

class DriverAdmin(admin.ModelAdmin):
    list_display = ['user','age'] 

class VehicleAdmin(admin.ModelAdmin):
    list_display = ['name','vnum','storagelocation'] 
    
class VehicleAllotmentAdmin(admin.ModelAdmin):
    list_display = ['driver','vehicle','createdAt'] 
    list_filter = ['driver','vehicle'] 

admin.site.register(Driver,DriverAdmin)
admin.site.register(Vehicle,VehicleAdmin)
admin.site.register(StorageLocation,StorageLocationAdmin)
admin.site.register(VehicleAllotment,VehicleAllotmentAdmin)
