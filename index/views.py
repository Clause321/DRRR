from django.shortcuts import render_to_response
from django.http import *

from index.models import Users

def index(request):
    return render_to_response('index.html')

def check(request):
    name = request.POST['username']
    try:
        ic = request.POST['icon']
    except:
        ic = {}
    if not Users.objects.filter(username = name):
        #return HttpResponse(Users.objects.filter(username = name))
        if not ic:
            return HttpResponse("Please select an icon")
        else:
            new = Users(username = name,
                       icon = ic)
            new.save()
            return HttpResponseRedirect('/room/')
    else:
        u = Users.objects.get(username = name)
        if u.icon == ic:
            return HttpResponseRedirect('/room/')
        else:
            u.icon = ic
            u.save()
            return HttpResponseRedirect('/room/')
