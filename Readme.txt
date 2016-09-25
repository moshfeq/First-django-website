To run it locally:
1) In settings.py make Debug=True and set Host={}
2) In wsgi.py put everything that deals with whitenoise in comment

To deploy it for production:
1) In settings.py make Debug=False and set Host={"*"}
2) In wsgi.py un-comment everything that deals with whitenoise 