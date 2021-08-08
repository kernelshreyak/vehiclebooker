from django.contrib import admin
from managementadmin.models import *

# Register your models here.

#  Get lat long from https://www.latlong.net/convert-address-to-lat-long.html

class StorageLocationAdmin(admin.ModelAdmin):
    list_display = ['name','address_string'] 
    
admin.site.register(Driver)
admin.site.register(Vehicle)
admin.site.register(StorageLocation,StorageLocationAdmin)
