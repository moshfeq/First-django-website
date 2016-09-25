from django.conf.urls import url, include
from django.views.generic import ListView, DetailView
from blog.models import Post
from blog.views import PostListView



urlpatterns = [ 
                url(r'^$', PostListView.as_view(), name='PostListView'),
                url(r'^(?P<pk>\d+)$', DetailView.as_view(
                                    model = Post,
                                    template_name="blog/post.html")),
             ]
