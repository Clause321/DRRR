from django.db import models

class Users(models.Model):
    username = models.CharField(max_length = 10)
    icon = models.CharField(max_length = 10)

    def __unicode__(self):
        return self.username
