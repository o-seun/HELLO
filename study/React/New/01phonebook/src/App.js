import React, { Component } from 'react';

import PhoneBook from './component/PhoneBook'

class App extends Component {
  handleCreate = (data) => {
    console.log(data);
  }

  render() {
    return (
      <React.Fragment>
        <PhoneBook
          onCreate={this.handleCreate}
        />
      </React.Fragment>
    );
  }
}

export default App;
