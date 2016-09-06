from django.conf.urls import url,include
from . import views
from django.views.generic import ListView, DetailView
from blog.models import Post

urlpatterns = [
    url(r'^$', ListView.as_view(
                                queryset=Post.objects.all().order_by("-date")[:2],
                                template_name="personal/index.html")),
]


