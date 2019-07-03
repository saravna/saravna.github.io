import React,{Component} from 'react';
import Card from './Card';
import './Robots';
import { Robots } from './Robots';
import SearchBox from './SearchBox';
import './App.css'

class App extends Component{
    constructor(){
        super();
        this.state={
            robots: Robots,
            searchField: ''
        };
    }

    onSearchChange(event){
        console.log(event.target.value);
    }
    render(){
        let robots=[];
        for(var i=0;i<Robots.length;i++){
            robots.push(<Card key={i} name={Robots[i]}/>);
        }
        return(
            <div>
                <h1 className="mainhead tc">RoboFriends</h1>
                <SearchBox searchChange={this.onSearchChange}/>
                <div>
                    {robots}
                </div>
            </div>
        );
    }
}
export default App;