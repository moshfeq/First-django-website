from django.shortcuts import render
from django.views.generic import ListView, DetailView
from blog.models import Post

class PostListView(ListView):
	queryset = Post.objects.all().order_by("-date")[:20]
	template_name = 'blog/blog.html'

