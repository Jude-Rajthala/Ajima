import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';

function App() {
  return (
    <Router>
      <Switch>
        <Route exact path="/" component={LoginPage} />
        <Route path="/dashboard" component={Dashboard} />
        <Route path="/report" component={ReportPage} />
      </Switch>
    </Router>
  );
}

export default App;
