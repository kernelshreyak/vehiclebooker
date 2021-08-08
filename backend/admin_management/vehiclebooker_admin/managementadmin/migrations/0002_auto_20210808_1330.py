# Generated by Django 3.2.6 on 2021-08-08 13:30

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('managementadmin', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='storagelocation',
            name='address_string',
            field=models.CharField(max_length=200),
        ),
        migrations.AlterField(
            model_name='storagelocation',
            name='name',
            field=models.CharField(max_length=200),
        ),
        migrations.AlterField(
            model_name='vehicle',
            name='name',
            field=models.CharField(max_length=200),
        ),
        migrations.AlterField(
            model_name='vehicle',
            name='vnum',
            field=models.CharField(max_length=100, unique=True),
        ),
    ]