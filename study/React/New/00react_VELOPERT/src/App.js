import React from 'react';

import MyName from './component/MyName'
import Counter from './component/Counter'

function App() {
  return (
    <React.Fragment>
      <MyName name="옥" />
      <Counter />
    </React.Fragment>
  );
}

export default App;
