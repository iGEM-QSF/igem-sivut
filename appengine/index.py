import webapp2

class MainPage(webapp2.RequestHandler):
    def get(self):
        self.response.headers['Content-Type'] = 'text/html'
        self.response.write('<html><head><meta http-equiv="refresh" content="0; url=http://www.aaltohelsinki.com/" /></head><body>Redirecting...</body></html>')

application = webapp2.WSGIApplication([
    ('/', MainPage),
], debug=True)