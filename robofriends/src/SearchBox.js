import React,{Component} from 'react';

class SearchBox extends Component{
    render(){
        return(
            <div className="pa2 bg-red tc">
                <input className="pa2 ba bg-black tc br2" 
                type="search" 
                placeholder="Search Robots" 
                onChange={this.props.searchChange}/>
            </div>
        );
    }
}
export default SearchBox;